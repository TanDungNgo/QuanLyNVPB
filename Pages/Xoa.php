<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Xoa nhan vien</title>
    <style>
        .wrapper {
            margin: 40px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h4 align="center">Du lieu bang nhan vien</h4>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr align="center">
                    <th>IDNV</th>
                    <th>Ho ten</th>
                    <th>IDPB</th>
                    <th>Dia chi</th>
                    <th>Chuc nang</th>
                </tr>
            </thead>
            <?php
            $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");
            mysqli_select_db($link, "Dulieu");
            $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<tr><td>' . $row['IDNV'] . '</td><td>' . $row['Hoten'] . '</td><td>' . $row['IDPB'] . '</td><td>' . $row['Diachi']
                    . '</td><td align="center"><a href="Xulixoa.php?IDNV=' . $row['IDNV'] . '">Delete</a></td></tr>';
            }
            mysqli_free_result($rs);
            mysqli_close($link);
            ?>
        </table>
    </div>
</body>

</html>