<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class URLShortener extends BaseController
{
    protected $db;

    public function __construct(){
        $this->db = db_connect();
    }
    public function testShorteners()
    {
        $prevLong = "";
        $prevShort = "";

        if($this->request->getMethod() == "POST"){
            
            $tableObject = $this->db->table("urls");
            
            $long_url = $this->request->getPost("long_url");
            $shortcode = $this->generateShortcode();

            $tableObject->insert([
                "long_url" => $long_url,
                "shortcode" => $shortcode,
            ]);

            $prevLong = $long_url;
            $prevShort = $shortcode;
        }

        return view("shortener", [
            "shortcode" => $prevShort,
            "long_url" => $prevLong
        ]);
    }

    public function generateShortcode(){
        $pattern = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $shuffled = str_shuffle($pattern);

        return substr($shuffled, 0, 6);
    }

    public function handelLongURL($segment){
        $shortcode = $segment;

        $tableObject = $this->db->table("urls");

        $long_url_exists = $tableObject->select("long_url")->where("shortcode", $shortcode)->get()->getRowArray();

        if(!empty($long_url_exists)){
            return redirect()->to($long_url_exists["long_url"]);
        }else{

            return json_encode([
                "status" => false,
                "message" => "URL not found"
            ]);

        }
    }
}
