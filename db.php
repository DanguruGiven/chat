<?php

    session_start();


    $db = mysqli_connect('localhost','root','','chat');

    if (isset($_POST["send"])){
        
        // $name = $_POST['userName'];
        $message = $_POST['message'];

        $query = "insert into messages (message)values ($message)";
        
        if ($db) {
            
            echo "Connected";
        }
        $result = mysqli_query($db,$query);

        if ($result){
            
            echo "Success";
        }
    }



?>