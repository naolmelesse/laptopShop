<?php
session_start();
require_once "Database.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, ($_POST['password']));
$sql = "SELECT email FROM member WHERE email ='" . $email . "'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($result) {
    echo "<script>alert('account already exists with that email!')</script>";
    header("Refresh:0 , url = form.html");
    exit();
}else{
if ($_POST['fname'] != null && $_POST['lname'] != null && $_POST['email'] != null && $_POST['password'] != null && $_POST['phone'] != null && $_POST['city'] != null ) {
    $sql = "INSERT INTO member (fname, lname, email, password, phone, city) VALUES ('" . trim($_POST['fname']) . "','" . trim($_POST['lname']) . "','" . trim($_POST['email']) . "','" . trim(md5($_POST['password'])) . "','" . trim($_POST['phone']) . "','" . trim($_POST['city']) . "')";
    if ($conn->query($sql)) {
        echo "<script>alert('Registration is complete.')</script>";
        header("Refresh:0 , url = login.html");
        exit();
    } else {
        echo "<script>alert('Registration isn't complete.')</script>";
        header("Refresh:0 , url = form.html");
        exit();
    }
} else {
    echo "<script>alert('Please enter new information or the password does not match.')</script>";
    header("Refresh:0 , url = login.html");
    exit();
}
    mysqli_close($conn);
}
