<?php
//Connect Database
include "./config/db.php";

//Upload Proof of Payment
if (isset($_POST['register_btn'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $lga = $conn->real_escape_string($_POST['lga']);
    $dateOfBirth = $conn->real_escape_string($_POST['dateOfBirth']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $height = $conn->real_escape_string($_POST['height']);
    $occupation = $conn->real_escape_string($_POST['occupation']);
    $igHandle = $conn->real_escape_string($_POST['igHandle']);
    $proof_path  = $conn->real_escape_string('upload/'.$_FILES['proof']['name']);
    $picture_path  = $conn->real_escape_string('upload/'.$_FILES['picture']['name']);
    $regCode = 'MME'.rand(1000, 9999);
    $biography = $conn->real_escape_string($_POST['biography']);

    if (file_exists($proof_path))
    {
        $proof_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['proof']['name']);
    }

    if (file_exists($picture_path))
    {
        $picture_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['picture']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['proof']['type'])) {
        $checker ++;
    }
    if (preg_match("!pdf!", $_FILES['proof']['type'])) {
        $checker ++;
    }
    if (preg_match("!image!", $_FILES['picture']['type'])) {
        $checker ++;
    }
    if (preg_match("!pdf!", $_FILES['picture']['type'])) {
        $checker ++;
    }
    if ($checker < 2){
        exit;
    }


    $query = "INSERT INTO applicants (firstName, lastName, email, phoneNum, lga, dateOfBirth, gender, height, occupation, igHandle, proof, picture, regCode, biography)"
        . "VALUES ('$firstName', '$lastName', '$email', '$phoneNum', '$lga', '$dateOfBirth', '$gender', '$height', '$occupation', '$igHandle', '$proof_path=', '$picture_path', '$regCode', '$biography')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        //copy image to upload folder
        copy($_FILES['proof']['tmp_name'], $proof_path);
        copy($_FILES['picture']['tmp_name'], $picture_path);

        $_SESSION['regCode'] = $regCode;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phoneNum'] = $phoneNum;

        $_SESSION['success_status'] = "Registration Successful, please hold you're being redirected...";
        echo "<meta http-equiv='refresh' content='2; URL=registrations-details'>";
    }
    else {
        $error=$conn->error;
        $_SESSION['error_status'] = "Error Occurred " .$error;
    }
}
