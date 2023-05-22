<?php

include_once 'database.php';
//$qry = "INSERT INTO feedbacks (origin, destination, feedback)
//		VALUES (?, ?, ?)";
//$insert = mysqli_query($con, $qry);


$origin=$_POST["origin"];
$destination=$_POST["destination"];
$feedback=$_POST["feedback"];

$query = "INSERT INTO feedbacks (origin, destination, feedback)
		VALUES ('$origin', '$destination', '$feedback')";
mysqli_query($mysqli, $query);

header("Location: index.php?feedback=success");
exit;

/*if(isset($_POST['submit']))
{

    $origin=$_POST["address-one"];
    $destination=$_POST["address-two"];
    $feedback=$_POST["feedback_input"];

}

$sql = "INSERT INTO 'feedbacks' ('origin', 'destination', 'feedback')
		VALUES ('$origin', '$destination', '$feedback')";
$insert = mysqli_query($conn, $sql);
if(!$insert)
{

    echo "there are some problem while inserting data";

} else
{

    echo "Data successfully inserted.";

}*/
