<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tim kiem thong tin nhan vien</title>
    <style>
        .wrapper {
            margin: 40px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>IDNV</th>
                    <th>Ho ten</th>
                    <th>Dia chi</th>
                </tr>
            </thead>
            <?php
            $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");
            mysqli_select_db($link, "Dulieu");
            if ($_REQUEST['search'] == "") {
                header("Location:Timkiem.php");
            }
            if ($_REQUEST['search'] == "IDPB") {
                $value = $_REQUEST['value'];
                $rs = mysqli_query($link, "SELECT * FROM NHANVIEN where IDPB = '$value'");
            }
            if ($_REQUEST['search'] == "Hoten") {
                $value = $_REQUEST['value'];
                $rs = mysqli_query($link, "SELECT * FROM NHANVIEN where Hoten like '%$value%'");
            }
            if ($_REQUEST['search'] == "Diachi") {
                $value = $_REQUEST['value'];
                $rs = mysqli_query($link, "SELECT * FROM NHANVIEN where Diachi like '%$value%'");
            }
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<tr><td>' . $row['IDNV'] . '</td><td>' . $row['Hoten'] . '</td><td>' . $row['Diachi'] . '</td></tr>';
            }
            ?>
        </table>
        <a href="Timkiem.php" class="btn btn-primary">Back</a>
    </div>
</body>

</html>