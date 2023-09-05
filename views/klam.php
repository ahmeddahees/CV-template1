<?php include "../php/uplouad.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asdasd</title>
    <link href="../public/css/style.css" rel="stylesheet">

    <link href="../public/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div>
    <form method="POST" action="klam.php" enctype="multipart/form-data">
        <input type="text"  name="title" placeholder="title">

        <input type="file" id="input_photo"name="photo[]" multiple="multiple">
        <input type="text" name="klam"placeholder="klam">

        <button name="submiit"  type="submit">click here</button>



    </form>
    </div>
</body>

</html>