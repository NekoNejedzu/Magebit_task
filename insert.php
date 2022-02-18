<?php
        $email = $_POST['email'];
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "vitalijs";
        $password = "vitalijs";
        $dbname = "magebit_test";
        
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
                //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        extract($_POST);
          if($email == NULL){
            header("index.php?errmsg=Email address is required");
            exit;
          }
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("index.php?errmsg=Please provide a valid e-mail address");
            exit;
          }
          if(substr($email, -3) == ".co"){
            header("index.php?errmsg=We are not accepting subscriptions from Colombia emails");
            exit;
          }
          else{
             //This below line is a code to Send form entries to database
           $sql = "INSERT INTO registration (email) VALUES ('$email')";
        //fire query to save entries and check it with if statement
          $rs = mysqli_query($con, $sql);
          if($rs)
          {
              echo "Successfully saved";
          }       
          }
          mysqli_close($con);
?>