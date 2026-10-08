<?php

    // echo link_tag("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css");
    // echo link_tag(base_url("style.css"));

    $hiddenFields = [
        "name" => "Harsh",
        "email" => "harsh@gmail.com"
    ];

    // echo form_open(base_url('add-manager'), [
    //     "class" => "frm-add-manager",
    //     "id" => "frm-add-manager",
    //     "enctype" => "multipart/form-data"
    // ], $hiddenFields);

    // create form with auto multipart added.
    echo form_open_multipart(base_url('add-manager'), [
        "class" => "frm-add-manager",
        "id" => "frm-add-manager",
    ]);

    // to add hidden field.
    echo form_hidden("name", "Harsh");

    // add the input field
    echo form_input("name", "",[
        "class" => "form-control",
        "placeholder" => "enter name",
        "id" => "name",
    ]);

    echo form_input("email", "",[
        "class" => "form-group",
        "placeholder" => "enter email",
        "id" => "email",
    ], "email");

    $options = [
        "" => "-- Select --",
        "seo" => "SEO",
        "web-developer" => "Web Developer",
        "php-developer" => "PHP Developer",
    ];

    echo form_dropdown("designation", $options, "web-developer");

    echo form_password("password", "", [
        "class" => "form-group",
        "id" => "password",
        "placeholder" => "Enter Password"
    ]);

    echo form_submit("", "Submit", [
        "class" => "btn btn-success"
    ]);

    echo form_close();
     

?>