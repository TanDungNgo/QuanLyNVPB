<?php

$IDNV = $_REQUEST['IDNV'];
$Hoten = $_REQUEST['Hoten'];
$IDPB = $_REQUEST['IDPB'];
$Diachi = $_REQUEST['Diachi'];

$link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");

mysqli_select_db($link, "Dulieu");

$rs = mysqli_query($link, "INSERT INTO NHANVIEN (IDNV, Hoten, IDPB, Diachi)
VALUES ('$IDNV','$Hoten','$IDPB','$Diachi')");

header("Location:XemthongtinNV.php");
