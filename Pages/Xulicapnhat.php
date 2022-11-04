<?php
$IDPB = $_REQUEST['IDPB'];
$Tenpb = $_REQUEST['Tenpb'];
$Mota = $_REQUEST['Mota'];

if ($IDPB == "" || $Tenpb == "" || $Mota == "") {
    header("Location:form_capnhat.php");
} else {
    $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");

    mysqli_select_db($link, "Dulieu");

    $rs = mysqli_query($link, "UPDATE PHONGBAN SET Tenpb='$Tenpb', Mota='$Mota' WHERE IDPB='$IDPB'");
    header("Location:Capnhat.php");
}
