<?php
    $config = mysqli_connect("localhost","username","password","name_database");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = mysqli_query($config, "SELECT * FROM name_table WHERE name='$name' && username='$username' && email='$email' && password='$password'");
        $check = mysqli_num_rows($data);
        if($check > 0){
            echo "Failed!";
        } else {
            mysqli_query($config, "INSERT INTO name_table VALUES('$name', '$username', '$email', '$password')");
            echo "Success!";
        }
    }
?>
