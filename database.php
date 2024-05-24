<?php
    $db_server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "books_review_system";
    $connection = "";

    try{
        $connection = mysqli_connect( $db_server,$username,$password,$db_name) ;
    }catch(mysqli_sql_exception){
        echo"Could not connect database!!";
    }
    // if($connection){
    //     echo" DataBase connected succesfully!!"; 
    // }

?>


