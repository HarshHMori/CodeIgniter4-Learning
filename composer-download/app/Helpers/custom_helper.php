<!-- 
custom_helper.php
custom (file name, helper name)
_helper.php (in all helper)
-->

<?php

if(!function_exists("slugify")){
    function slugify($text){
        $string = strtolower($text);

        echo str_replace(" ", "-", $string);
    }
}

// Filter Projects budget > 0 && budget < 1000

if(!function_exists("getBudgetWiseProjects")){
    function getBudgetWiseProjects($budget){
        $db = db_connect();
        $projectTable = $db->table("projects");
        
        $dataset = $projectTable->select("*")->where([
            "budget >" => 0,
            "budget <" => $budget
        ])->get()->getResultArray();

        return $dataset;
    }
}