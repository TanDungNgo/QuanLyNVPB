<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Du lieu phong ban</title>
    <style>
        .wrapper {
            margin: 40px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h4 align="center">Du lieu bang phong ban</h4>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>IDPB</th>
                    <th>Ten phong ban</th>
                    <th>Mo ta</th>
                    <th>Xem nhan vien</th>
                </tr>
            </thead>
            <?php
            $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");
            mysqli_select_db($link, "Dulieu");
            $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<tr><td>' . $row['IDPB'] . '</td><td>' . $row['Tenpb'] . '</td><td>' . $row['Mota'] .
                    '</td><td align="center"><a href="XemthongtinNVPB.php?IDPB=' . $row['IDPB'] . '">View</a></td></tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>