<?php
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

if ($user == "" || $pass == "") {
    header("Location:login.php");
} else {
    $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");

    mysqli_select_db($link, "Dulieu");

    $rs = mysqli_query($link, "SELECT * FROM ADMIN WHERE username = '$user' AND password = '$pass'");

    if (mysqli_num_rows($rs) == 0)
        header("Location:login.php");
    else
        header("Location:home.php?login=success");

    mysqli_free_result($rs);
    mysqli_close($link);
}
