<?php
$con = mysqli_connect("localhost", "root", "", "hilltop2022");


if (isset($_POST['submit'])) {

    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $ZONE = $_POST['ZONE'];
    $diocese = $_POST['diocese'];
    $Ministry = $_POST['Ministry'];
    $School = $_POST['School'];

    $insert = mysqli_query($con, "INSERT INTO user(name,gender,email,PhoneNumber,ZONE,diocese,Ministry,School) VALUES('$name','$gender','$email','$PhoneNumber','$ZONE','$diocese','$Ministry','$School')");
// close for now
    // if ($insert) {
      //  echo "<h1>Submitted Successfully</h1>";
    //} else {
      //  echo "Error" . $insert . "</br>" . $con->error;
    //}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>God bless you</h1>
    <p>You are welcome in this HILLTOP 2022:</p>
    <ol>
        <em>Name:</em> <?php echo $_POST["fullname"]?><br>
        <em>Gender:</em> <?php echo $_POST["gender"]?><br>
        <em>Phone Number:</em> <?php echo $_POST["PhoneNumber"]?><br>
        <em>ZONE:</em> <?php echo $_POST["ZONE"]?><br>
        <em>Diocese:</em> <?php echo $_POST["diocese"]?><br>
        <em>Ministry:</em> <?php echo $_POST["Ministry"]?><br>
        <em>School:</em> <?php echo $_POST["School"]?><br>
        </ol>

        <a href="index.php">Back</a>
</body>
</html>