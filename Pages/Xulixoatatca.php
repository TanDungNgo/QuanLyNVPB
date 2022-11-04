<?php
$link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");

mysqli_select_db($link, "Dulieu");

$rs = mysqli_query($link, "SELECT IDNV FROM NHANVIEN");
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    $IDNV = $_REQUEST[$row["IDNV"]];
    $rsl = mysqli_query($link, "DELETE FROM NHANVIEN WHERE IDNV='$IDNV'");
}

header("Location:Xoatatca.php");
