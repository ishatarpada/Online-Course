<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - $_SERVER</title>
</head>

<body>
    <!-- 
        $_SERVER :- 
            $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

            The example below shows how to use some of the elements in $_SERVER:
     -->


    <?php

    echo "<h1>&#10022; PHP SERVER</h1>";

    echo " filename of the currently executing script &#10170; " . $_SERVER['PHP_SELF'];
    echo "<br><br>";

    echo "the version of the Common Gateway Interface (CGI) the server is using &#10170; " . $_SERVER['GATEWAY_INTERFACE'];
    echo "<br><br>";

    echo "the IP address of the host server &#10170; " . $_SERVER['SERVER_ADDR'];
    echo "<br><br>";

    echo "the name of the host server &#10170; " . $_SERVER['SERVER_NAME'];
    echo "<br><br>";

    echo "the server identification string (such as Apache/2.2.24) &#10170; " . $_SERVER['SERVER_SOFTWARE'];
    echo "<br><br>";

    echo "the name and revision of the information protocol (such as HTTP/1.1) &#10170; " . $_SERVER['SERVER_PROTOCOL'];
    echo "<br><br>";

    echo "the request method used to access the page (such as POST) &#10170; " . $_SERVER['REQUEST_METHOD'];
    echo "<br><br>";

    echo "the timestamp of the start of the request (such as 1377687496) &#10170; " . $_SERVER['REQUEST_TIME'];
    echo "<br><br>";

    echo "the query string if the page is accessed via a query string &#10170; " . $_SERVER['QUERY_STRING'];
    echo "<br><br>";

    echo "the Accept header from the current request &#10170; " . $_SERVER['HTTP_ACCEPT'];
    echo "<br><br>";

    echo "The Accept-Charset header from the current request (such as utf-8, ISO-8859-1) &#10170; " .  $_SERVER['HTTP_ACCEPT_CHARSET'];
    echo "<br><br>";
    
    echo  " the Host header from the current request &#10170; " . $_SERVER['HTTP_HOST'];
    echo "<br><br>";

    echo  "the complete URL of the current page  &#10170; " . $_SERVER['HTTP_REFERER'];
    echo "<br><br>";

    echo  "	Is the script queried through a secure HTTP protocol  &#10170; " . $_SERVER['HTTPS'];
    echo "<br><br>";

    echo  "the IP address from where the user is viewing the current page  &#10170; " . $_SERVER['REMOTE_ADDR'];
    echo "<br><br>";

    echo  "the Host name from where the user is viewing the current page  &#10170; " . $_SERVER['REMOTE_HOST'];
    echo "<br><br>";

    echo  "the port being used on the user's machine to communicate with the web server  &#10170; " . $_SERVER['REMOTE_PORT'];
    echo "<br><br>";

    echo  "the absolute pathname of the currently executing script0170; " . $_SERVER['SCRIPT_FILENAME'];
    echo "<br><br>";

    echo  "the value given to the SERVER_ADMIN directive in the web server configuration file  &#10170; " . $_SERVER['SERVER_ADMIN'];
    echo "<br><br>";

    echo  "the port on the server machine being used by the web server for communication (such as 80)  &#10170; " . $_SERVER['SERVER_PORT'];
    echo "<br><br>";

    echo  "the server version and virtual host name which are added to server-generated pages  &#10170; " . $_SERVER['SERVER_SIGNATURE'];
    echo "<br><br>";

    echo  " the file system based path to the current script  &#10170; " . $_SERVER['PATH_TRANSLATED'];
    echo "<br><br>";

    echo  "contains information about the user's browser, such as its name and version &#10170;" . $_SERVER['HTTP_USER_AGENT'];
    echo "<br><br>";

    echo  "the path of the current script &#10170; " . $_SERVER['SCRIPT_NAME'];
    echo "<br><br>";

    echo  "the URI of the current page &#10170; " . $_SERVER['SCRIPT_URI'];
    ?>
</body>

</html>