<?php
       
        $email = $_POST['email'];
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "magebit_test";
        
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
                //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        extract($_POST);
        
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO registration (email) VALUES ('$email')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    
?>
