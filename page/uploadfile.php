<?php
session_start();
if (isset($_SESSION['userid'])) {
    header("Location:home.php");
}
if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
if ( 0 < $_FILES['image']['error'] ) {
    echo 'Error: ' . $_FILES['image']['error'] . '<br>';
}
else {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $userid = $_SESSION['userid'];
    $url = time() . '_' . $_FILES['file']['name'];
    $image = time() . '_' . $_FILES['image']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'], '../templates/' . $url);
    move_uploaded_file($_FILES['image']['tmp_name'], '../templates/' . $image);

    $Connection = mysqli_connect('localhost', 'root', '123456', 'assignment2_1');
    mysqli_set_charset($Connection, 'utf8');

    $Query = "INSERT INTO templ(templUserid, templUpTime, templType, templName, templDesc, templUrl, templImg1) 
    VALUES('$userid', now(), '$type', '$name', '$description', '$url', '$image')";
    $Execute = mysqli_query($Connection, $Query);

    echo $Execute?'ok':'err';
}
?>
