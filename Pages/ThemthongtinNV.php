<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Them nhan vien</title>
    <style>
        .wrapper {
            margin: 40px;
            padding: 0 100px;
        }
    </style>
    <?php
    $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");
    mysqli_select_db($link, "Dulieu");
    $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");
    ?>
</head>

<body>
    <div class="wrapper">
        <h4 align="center">Them nhan vien</h4>
        <div class="card mt-10 mf-10">
            <div class="card-body">
                <form align="center" action="XulithemNV.php">
                    <div className="form-group">
                        <input type="text" class="form-control mb-3" name="IDNV" placeholder="Nhap IDNV" />
                    </div>
                    <div className="form-group">
                        <input type="text" class="form-control mb-3" name="Hoten" placeholder="Nhap ho ten" />
                    </div>
                    <div class="form-group">
                        <select class="form-select mb-3" name="IDPB">
                            <option selected>Chon IDPB</option>
                            <?php
                            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                            ?>
                                <option value="<?php echo $row['IDPB']; ?>">
                                    <?php echo $row['IDPB']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div className="form-group">
                        <input type="text" class="form-control mb-3" name="Diachi" placeholder="Nhap dia chi" />
                    </div>
                    <div className="form-group">
                        <input type="submit" value="Save" class="form-control btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>