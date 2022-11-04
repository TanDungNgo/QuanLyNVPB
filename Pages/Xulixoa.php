<?php

$IDNV = $_REQUEST['IDNV'];

$link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");

mysqli_select_db($link, "Dulieu");

$rs = mysqli_query($link, "DELETE FROM NHANVIEN WHERE IDNV='$IDNV'");

header("Location:Xoa.php");
