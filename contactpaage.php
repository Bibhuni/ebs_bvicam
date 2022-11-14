<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"contact");

if(isset($_POST['contact']))
{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $query = "INSERT INTO contact(name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
            if(mysqli_query($connection,$query))
            {
                echo"
                <script>
                alert('Registration sucessfull, back to login');
                window.location.href='home.php';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('can not run query');
                window.location.href='contactpage.html';
                </script>
                ";        
            }
}
    else
    {
        echo"
        <script>
        alert('can not run query');
        window.location.href='home.php';
        </script>
        ";
    }



?>