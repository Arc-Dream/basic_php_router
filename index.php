<?php

session_start();

// CAPTURE THE URL AS DATA
//
$actual_link = $_SERVER['REQUEST_URI'];


// PROCESS THE DATA TO NAME THE ROUTE
//
$url_array = explode("/", $actual_link);

// print_r($url_array);


// PROCESS THE ROUTE LIST AND REDIRECT 
// SUB IF CLAUSES WILL HANDLE SUB FOLDERS


    if($url_array[2] == '')
    {
        require __DIR__.'/MAIN1/home.php';

    }

    else if($url_array[2] == 'sub1')
    {
        if($url_array[3] == 'page1')
        {   
            require __DIR__.'/SUB1/sub1_page1.php';
                
        }
        
    }

    else if(str_starts_with($url_array[2], 'page1'))
    {
        require __DIR__.'/MAIN1/page1.php';
        
    }

    else if(str_starts_with($url_array[2], 'page2'))
    {
        require __DIR__.'/MAIN1/page2.php';
        
    }

    else if(str_starts_with($url_array[2], 'page3'))
    {
        require __DIR__.'/MAIN1/page3.php';
        
    }

    else
    {
        require __DIR__.'/url_error.php';
        
    }
        
            















