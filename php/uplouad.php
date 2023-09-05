<?php
$conn1 = mysqli_connect("localhost", "root", "", "photos");
if (!$conn1) {
    echo mysqli_connect_error();
}

if (isset($_POST['submiit'])) {
    $image_name = $_FILES['photo'];

    $title = $_POST['title'];
    $photo = $image_name['name'];
    $klam = $_POST['klam'];
    $temp = $image_name["tmp_name"];
    $error = $image_name["error"];

    $img_count = count($photo);

    for ($i = 0; $i < $img_count; $i++) {


        $sql123 =  "INSERT INTO man(title, link, klam) VALUES ('$title', '$photo[$i]', '$klam')";
        mysqli_query($conn1, $sql123);

        $comedata = "SELECT * FROM man";

        $reslut = mysqli_query($conn1, $comedata);
        $sqll1 = mysqli_fetch_all($reslut, MYSQLI_ASSOC);
        $folder = "../Img/" . $photo[$i];
        move_uploaded_file($temp[$i], $folder);
    }
}
