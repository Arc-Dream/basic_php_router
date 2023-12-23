## BASIC ROUTER FOR CORE PHP APPLICATIONS
## WITH STATIC FILES FOLDER VARIATION
<br>

**AN .htdaccess FILE ADDED**<br>

**FOR APACHE COMPATIBLE SERVER USAGE**<br>
<br>


**FILE ENCAPSULATION**<br>

Files contained in the MAIN1 are covered, 

Sub folders for extra files are possible,

CSS/JS/IMG files ares stored in STATIC folder transparently.
<br><br>


**STRUCTURE**<br>

First and index.php file set to be percieved by server,

Url content captured and transfered as an array,

The entry point found and processed in the array,

<br>

```php

    $actual_link = $_SERVER['REQUEST_URI'];

    $url_array = explode("/", $actual_link);

```
<br>

In this example it is 

    http://localhost/server_folder/route_name

    [0] => localhost
    [1] => server_folder
    [2] => route_name or folder_name

<br>

So it will be [2] as an entry point,

```php    
    $url_array[2]
```

<br>


**SUB FOLDERS AND FEATURES**<br>

Router build with nested if conditions,

In order to have flexibility with url variables etc,

Data Transfer with GET and POST request are possible

<br>

```php

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
```
<br>

**FURTHER COMPONENTS WILL BE ADDED**<br>

