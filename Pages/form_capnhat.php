<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Cap nhat phong ban</title>
    <style>
        .wrapper {
            margin: 40px 100px;
        }
    </style>
    <?php
    $IDPB = $_REQUEST['IDPB'];
    $link = mysqli_connect("localhost", "root", "") or die("Can not connect to MySQL");
    mysqli_select_db($link, "Dulieu");
    $rs = mysqli_query($link, "SELECT * FROM PHONGBAN WHERE IDPB = '$IDPB'");
    $row = mysqli_fetch_array($rs, MYSQLI_BOTH);
    ?>
</head>

<body>
    <div class="wrapper">
        <h4 align="center">Cap nhat phong ban</h4>
        <div class="card mt-10 mf-10 mb-3">
            <div class="card-body">
                <form align="center" action="Xulicapnhat.php?IDPB=<?php echo $row['IDPB']; ?>" method="POST">
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">IDPB</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row['IDPB']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">Ten phong ban</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Tenpb" value="<?php echo $row['Tenpb']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">Mo ta</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Mota" value="<?php echo $row['Mota']; ?>">
                        </div>
                    </div>
                    <div className="form-group">
                        <input type="submit" value="Update" class="form-control btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
        <?php
        mysqli_free_result($rs);
        mysqli_close($link);
        ?>
        <a href="Capnhat.php" class="btn btn-primary">Back</a>
    </div>
</body>

</html>