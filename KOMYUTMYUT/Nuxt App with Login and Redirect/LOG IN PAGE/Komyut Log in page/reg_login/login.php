<?php

if($_SERVER["REQUEST_METHOD"] === "POST")
{

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE username = '%s'",
                   $mysqli->real_escape_string($_POST["username"]));

    $result = $mysqli->query($sql);

    $users = $result->fetch_assoc();

    var_dump($users);
    exit

}

/*session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        //Posted
        $user = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty(($user_name) && !empty($password))){

            //read to db
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result =  mysqli_query($con, $query);

            if($result)
            {

                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;

                    }

                }

            }

            //header("Location: login.php");
            //die;

            echo "Incorrect credentials!";

        }
        
    }  else
    {

        echo "Please enter valid information!";

    }
*/
