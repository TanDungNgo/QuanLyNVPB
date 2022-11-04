<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tim kiem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Them nhan vien</title>
    <style>
        .wrapper {
            margin: 40px 200px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h4 align="center">Tim kiem nhan vien</h4>
        <div class="card mt-10 mf-10">
            <div class="card-body">
                <form align="center" action="TimkiemthongtinNV.php">
                    <div className="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="search" value="IDPB">
                            <label class="form-check-label">IDPB</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="search" value="Hoten">
                            <label class="form-check-label">Ho ten</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="search" value="Diachi">
                            <label class="form-check-label">Dia chi</label>
                        </div>
                    </div>
                    <div className="form-group">
                        <input type="text" name="value" class="form-control mb-3" placeholder="Nhap noi dung tim kiem" />
                    </div>
                    <div className="form-group">
                        <input type="submit" value="Search" class="form-control btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>