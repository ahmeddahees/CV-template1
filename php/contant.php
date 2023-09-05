<?php
$conn = mysqli_connect("localhost", "root", "", "mydata");

if (!$conn) {
    echo "asdasd" . mysqli_connect_error();
};


if (isset($_POST['submit'])) {
    $namefirst = $_POST['firstname'];
    $e_mail = $_POST['your_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO good(name, email, subject,message) 
VALUES ('$namefirst', '$e_mail', '$subject', '$message')";
    mysqli_query($conn, $sql);
}
mail("ahmeddahees7@gmail.com", "$subject", "$message");
// $sqll = 'SELECT * FROM good';
// $resultt = mysqli_query($conn, $sqll);

// $data = mysqli_fetch_all($resultt, MYSQLI_ASSOC);