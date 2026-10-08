<?php

namespace App\Controllers;
use App\Models\ManagerModel;
use CodeIgniter\HTTP\URI;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    // To manage Cookies
    public function manageCookie(){

        set_cookie("ci4_cookie", "CODE1234", 120);
    }

    // TO read cookie value
    public function readCookie(){
        echo get_cookie("ci4_cookie");
    }

    // TO delete a cookie value
    public function deleteCookie(){
        delete_cookie("ci4_cookie");
    }

    // test image
    public function testImage(){
        
        echo img("image.png", false, array(
            "height" => "300px",
            "width" => "400px",
            "class" => "image-tag"
        ));
    }

    public function testCssFile(){
        echo link_tag("style.css");
    }

    public function testJS(){
        echo script_tag("script.js");
    }

    // To add a list
    public function employeeList(){

        $list = [
            "Harsh",
            "Ram",
            "Shyam",
            "Vijay"
        ];


        
        $attr = [
            "class" => "my-list",
            "id" => "my-list-id"
        ];
            
        echo ol($list, $attr);
        // echo ul($list, $attr);
    }

    public function testInflector(){
        // $value = "doggy";//plural, singular

        // // echo singular($value);
        // echo plural($value);

        $value = "this-is-my-test";

        // echo camelize($value); //this_is_my_test->thisIsMyTest

        // echo underscore($value); //this is my test->this_is_my_test
        
        // echo humanize($value); //this_is_my_test -> This Is My Test
        echo humanize($value, "-"); //this-is-my-test -> This Is My Test
    }

    // Number helpers
    public function testNumbers(){
        // convert number in to size
        // echo number_to_size(987654);

        // convert in amount
        // echo number_to_amount(1238798790);

        // number to roman
        echo number_to_roman(4000);
    }

    // Test File system helper
    public function testFileSystem(){
        // $sourcePath = "../vendor";

        // $foldersFiles = directory_map($sourcePath, 1, true);

        // echo "<pre>";

        // print_r($foldersFiles);


        // copy all files from public to copy filder
        // $originalDir = "./";
        // $targetDir = "../copy";
        // directory_mirror($originalDir, $targetDir);

        // Write file 
        // $filePath = "./data.txt";
        // $content = "This is the sample content";

        // write_file($filePath, $content);

        // delete filed
        // $sourcePath = "../copy";
        // delete_files($sourcePath, false, false, true);

        // to get dir file info
        $sourcePath = APPPATH. "Controllers";

        $fileInfo = get_dir_file_info($sourcePath);

        echo "<pre>";
        print_r($fileInfo);

    }

    // text helper
    public function testText(){
        // $data = random_string("crypto");  //alnum, alpha, nozero, crypto, numeric
        // echo $data;

        // $url = "https://codeigniter.com//user_guide/helpers//text_helper.html";  // remove double slashes except the first http://
        // echo reduce_double_slashes($url);

        // $data = [
        //     "name" => "S\amp\le n\ame",
        //     "email" => "samp\le@examp\le.com"
        // ];

        // print_r(strip_slashes($data));

        // $employees = "Emp1,, Emp2,, Emp3, Emp4";
        // echo reduce_multiples($employees, ",");

        // exclude all words after the limit.
        $string = "This is a survey where all employee must pass their basic test";
        echo word_limiter($string, 4);
    }

    // test custom helper
    public function testCustom(){
        $string = "This is a survey of employees";

        echo slugify($string);
    }

    public function testBudget(){
        // helper("custom");

        $project = getBudgetWiseProjects(1000);

        echo "<pre>";

        print_r($project);
    }

    // test cURL service
    public function testCURL(){
        $client = service("curlrequest"); //method or
        // $client = \Config\Services::curlrequest();

        // get req
        // $response = $client->request("GET", "https://jsonplaceholder.typicode.com/posts");

        // echo "<pre>";

        // // print_r($response);

        // // $posts = json_decode($response->getBody(), true);

        // // echo "<pre>";
        // // print_r($posts);

        // echo $response->getStatusCode();

        // post req
        $response = $client->request("POST", "https://jsonplaceholder.typicode.com/posts", [
            "body" => http_build_query(array(
                "userId" => 102,
                "id" => 1000,
                "title" => "Sample title",
                "body" => "Sample body")
            )
        ]);

        echo "<pre>";
        print_r($response->getBody());

    }

    // Pagination
    public function testPagination(){

        // $pagination = \Config\Services::pager(); //or by base controller or
        $pagination = service("pager");

        $managerModel = new ManagerModel;
        // $managers = $managerModel->findAll();

        // foreach($managers as $manager){
        //     echo "<b>Name:</b> ".$manager->name. ", <strong>Email:</strong> ".$manager->email. "<br>";
        // }

        $managers = $managerModel->paginate(10);
        $data = [
            "managers" => $managers,
            "pagination" => $pagination
        ]; 

        return view("managers", $data);

    }



    protected $session2;
    public function __construct(){
        $this->session2 = session();
    }
    // to store sessions data
    public function storeData(){
        // Method 1
        // $session = \Config\Services::session();

        // method 2
        // $session = session();

        // store single value
        // $session->set("name", "Online Web Tutor");

        // $this->session2->set([
        //     "email" => "abc@gmail.com",
        //     "phone_number" => "7415723398",
        //     "auth" => 0
        // ]);

        $this->session2->setFlashdata("message", "Data saved successfully");

        echo "Session data stored successfully";

        
    }

    // read session value
    public function readSessionValue(){
        // $session = session();

        // echo $session->get("email");
        // echo "<pre>";
        // print_r($this->session2->get());

        // temporary data storing
        echo $this->session2->getFlashdata("message");
    }

    // remove a key value
    public function removeData(){
        // $session = session();
        // $session->remove("phone_number");

        $this->session2->destroy();

        echo "Data removed successfully";
    }

    // Identify URL Parameters
    public function testURL(){
        // // method 1
        // // $uri = \Config\Services::uri();

        // // method 2
        // $uri = service("uri");

        // echo $this->request->getUri();
        // echo "<br><br>";
        // echo $uri->getScheme();
        // echo "<br><br>";
        // echo $uri->getPort();
        // echo "<br><br>";
        // echo $uri->getHost();
        // echo "<br><br>";
        // echo $uri->getPath();
        // echo "<br><br>";
        // echo $uri->getTotalSegments();
        // echo "<br><br>";
        // echo $uri->getSegment(1);
        // echo "<br><br>";
        // print_r($uri->getSegments());

        // $uri = new URI("http://localhost:8080/index.php/project/100?title=sample-title&budget=1000#section-2");
        $uri = new URI($this->request->getUri());

        echo $uri->getPath();
        echo "<br><br>";
        echo $uri->getTotalSegments();
        echo "<br><br>";
        print_r($uri->getSegments());
        echo "<br><br>";
        echo $uri->getSegment(2);
        echo "<br><br>";
        echo $uri->getQuery();
        echo "<br><br>";
        echo $uri->getFragment();

    }

    // Encryption

    public function testMessage(){
        $message = "Please meet at 11 AM at Tower B";

        $config = new \Config\Encryption();

        $config->key = "1231232";
        $config->driver = "OpenSSL";

        $encrypter = service("encrypter", $config);

        $encStringValue = $encrypter->encrypt($message);

        echo $encrypter->decrypt($encStringValue);
    }

    // User Agent Service

    public function testAgent(){
        $agent = $this->request->getUserAgent();

        // if($agent->isMobile()){
        //     echo "<h1>Mobile Version</h1>";
        //     echo "<h1>".$agent->getMobile()."</h1>";
        // }else{
        //     echo "Name: ".$agent->getBrowser();
        //     echo "<br>";
        //     echo "Version: ".$agent->getVersion();
        // }

        // echo $agent->getPlatform();
        echo $agent->getAgentString();
    }

    // Date & Time
    public function testDateTime(){
        // $time = new Time("now");
        // $time = Time::yesterday(); // now, tomorrow
        // $time = new Time("+3 weeks");
        // $time = Time::parse("next Tuesday");
        // $time = Time::now("Asia/Kolkata");
        // $time = new Time("now", "Asia/Kolkata");

        // echo $time;

        $time = Time::parse("September 10, 2026 4:38:23pm");

        // The output may vary based on locale.
        echo $time->getYear() ."<br>";
        echo $time->getMonth() ."<br>";
        echo $time->getDay() ."<br>";
        echo $time->getHour() ."<br>";
        echo $time->getMinute() ."<br>";
        echo $time->getSecond() ."<br><br>";

        // echo $time->Year ."<br><br>";
        // echo $time->month ."<br><br>";
        // echo $time->day ."<br><br>";
        // echo $time->hour ."<br><br>";
        // echo $time->minute ."<br><br>";
        // echo $time->second ."<br><br>";

    }
}
