<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Shield\Entities\User;
use App\Models\CustomUserModel;
use Exception;
use CodeIgniter\Shield\Models\UserModel;

/**
 * @OA\Info(
 *  title="CodeIgniter v4 APIs Docs with SHield Auth",
 *  version="1.0.0",
 *  description="This documentation will give you idea of Register, Login, Profile and Logout APIs"
 * )
 * 
 * @OA\Server(
 *  url="http://localhost:8080/",
 *  description="This is the information of local development server"
 * )
 * 
 */


class AuthController extends ResourceController
{
    // protected $modelName = "App\Models\CustomUserModel";
    /**
     * @OA\Post(
     *  path="/api/register",
     *  summary="User Registration API",
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(
     *          type="object",
     *          @OA\Property( property="username", type="string", example="sanjay_kumar" ),
     *          @OA\Property( property="email", type="string", example="sanjay@gmailtest.com" ),
     *          @OA\Property( property="name", type="string", example="Sanjay Kumar" ),
     *          @OA\Property( property="password", type="password", example="123456" ),
     *          @OA\Property( property="gender", type="string", example="male" ),
     *      )
     *  ),
     * 
     *  @OA\Response(
     *      response=200,
     *      description="User Registered Successfully"
     *  )
     * )
     */
    protected $format = "json";

    // User Register Method [POST] -> username, email, name, password, gender, phone_number
    public function register(){

        // Request Parameters
        $validationRules = [
            "username" => "required",
            "email" => "required",
            "name" => "required",
            "password" => "required",
            "gender" => "required"
        ];

        if(!$this->validate($validationRules)){

            return $this->respond([
                "status" => false,
                "message" => "Registration Failed due to invalid entries",
                "error" => $this->validator->getErrors()
            ]);
        }

        $modelObject = new CustomUserModel();

        // Table col name
        $entityObject = new User([
            "name" => $this->request->getVar("name"),
            "email" => $this->request->getVar("email"),
            "username" => $this->request->getVar("username"),
            "password" => $this->request->getVar("password"),
            "gender" => $this->request->getVar("gender"),
            "phone_no" => $this->request->getVar("phone_no")
        ]);

        if($modelObject->save($entityObject)){
            return $this->respond([
                "status" => true,
                "message" => "User Registered Successfully"
            ]);
        }else{
            return $this->respond([
                "status" => false,
                "message" => "Failed to Create User"
            ]);
        }


    }


    /** 
     * @OA\Post( 
     *     path="/api/login", 
     *     summary="User Login API", 
     *     tags={"Authentication"},
     *     @OA\RequestBody( 
     *         required=true, 
     *         @OA\JsonContent( 
     *             type="object", 
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="sanjay@gmailtest.com"), 
     *             @OA\Property(property="password", type="string", format="password", example="123456") 
     *         ) 
     *     ), 
     *     @OA\Response( 
     *         response=200, 
     *         description="User Logged In successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="User Logged In"),
     *             @OA\Property(property="token", type="string", example="123456789ajdjgnj...")
     *         )
     *     ),
     *     @OA\Response( 
     *         response=401, 
     *         description="Login Failed / Invalid Credentials",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Login Failed"),
     *             @OA\Property(property="error", type="object", nullable=true)
     *         )
     *     ) 
     * ) 
     * 
     * User Login API [POST] -> email, password
     */ 

    // User Login API [POST] -> email, password
    public function login(){
        $validationRules = [
            "email" => "required",
            "password" => "required"
        ];

        if(!$this->validate($validationRules)){
            return $this->respond([
                "status" => false,
                "message" => "Login Failed",
                "error" => $this->validator->getErrors()
            ]);
        }

        // Check User Details
        $credentials = [
            "email" => $this->request->getVar("email"),
            "password" => $this->request->getVar("password")
        ];

        try {

            if(auth()->loggedIn()){
                auth()->logout();
                
            }
            $loginAttempt = auth()->attempt($credentials);

            if(!$loginAttempt->isOK()){
                return $this->respond([
                    "status" => false,
                    "message" => "Login Failed"
                ]);
            }else{

                $userId = auth()->user()->id;
                $shieldModelObject = new UserModel();

                $userInfo = $shieldModelObject->findById($userId);

                $tokenInfo = $userInfo->generateAccessToken("123456789ajdjgnj");

                $raw_token = $tokenInfo->raw_token;

                return $this->respond([
                    "status" => true,
                    "message" => "User Logged In",
                    "token" => $raw_token
                ]);
            }

        } catch (Exception $ex) {
            return $this->respond([
                "status" => false,
                "message" => $ex->getMessage()
            ]);
        }
    }


    /** 
     * @OA\Get( 
     *     path="/api/profile", 
     *     summary="User Profile Details API", 
     *     tags={"User Profile"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response( 
     *         response=200, 
     *         description="Profile information fetched successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Profile information"),
     *             @OA\Property(property="data", type="object", description="Authenticated user model entity properties")
     *         )
     *     ),
     *     @OA\Response( 
     *         response=401, 
     *         description="Unauthorized / Token missing or expired" 
     *     ) 
     * ) 
     * 
     * User Profile Method[GET] -> Protected API Method -> Auth Token Value
     */ 
    // User Profile Method[GET] -> Protected API Method -> Auth Token Value
    public function profile(){
        $userData = auth("tokens")->user();

        return $this->respond([
            "status" => true,
            "message" => "Profile information",
            "data" => $userData
        ]);
    }


    /** 
     * @OA\Get( 
     *     path="/api/logout", 
     *     summary="User Logout / Token Revocation API", 
     *     tags={"Authentication"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response( 
     *         response=200, 
     *         description="User logged out successfully and tokens revoked",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="User logged out")
     *         )
     *     ),
     *     @OA\Response( 
     *         response=401, 
     *         description="Unauthorized" 
     *     ) 
     * ) 
     * 
     * Logout Method [GET] -> Protected API Method -> Auth Token Value
     */ 
    // Logout Method [GET] -> Protected API Method ->Auth Token Value
    public function logout(){
        auth()->logout();
        auth()->user()->revokeAllAccessTokens();

        return $this->respond([
            "status" => true,
            "message" => "User logged out"
        ]);
    }
}
