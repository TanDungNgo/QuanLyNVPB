<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <title>TrangChu</title>
  <style>
    * {
      font-family: sans-serif;
    }

    span {
      margin-right: 12px;
      font-size: 14px;
      color: white;
    }

    button {
      background-color: #0a5a99;
      border-radius: 5px;
      padding: 3px 20px;
      border: none;
    }

    b {
      margin-left: 20px;
      font-size: 13px;
    }

    input {
      border: 0;
    }

    input:focus {
      outline: none;
    }

    .search {
      border: 1px solid #757575;
      border-radius: 1rem;
      width: 200px;
    }

    .txt-search {
      background: transparent;
      height: 26px;
      width: 144px;
      line-height: 26px;
      padding-left: 10px;
      color: #757575;
      font-size: 12px;
    }

    .btn-search {
      float: right;
      width: 30px;
      height: 30px;
      text-indent: -100000em;
      background: url(../Images/sprite.png) no-repeat -47px -4px;
      cursor: pointer;
    }

    .table1 {
      border: 0.1px solid black;
    }

    .content {
      font-weight: bold;
      cursor: pointer;
      padding: 10px 20px 10px 20px;
      border-bottom: 0.1px dashed black;
    }

    .content:hover {
      background-color: #0a67af;
      color: white;
    }
  </style>
  <?php
  if (isset($_REQUEST["login"])) {
  ?>
    <a href="./user_sidebar.php" target="t2" id="sidebar"></a>
    <script type="text/javascript">
      $(document).ready(function() {
        document.getElementById("sidebar").click();
      });
    </script>
  <?php } ?>
  <?php
  if (isset($_REQUEST["logout"])) {
  ?>
    <a href="./sidebar.php" target="t2" id="sidebar"></a>
    <script type="text/javascript">
      $(document).ready(function() {
        document.getElementById("sidebar").click();
      });
    </script>
  <?php } ?>
</head>

<body style="margin: 0">
  <div style="background-color: #0a67af; padding: 5px 45px">
    <table width="100%">
      <tr>
        <td width="75%">
          <span>Tin tức & Sự kiện</span>
          <span>Thông báo</span>
          <span>Văn bản</span>
          <span>Lịch tuần</span>
          <span>Danh bạ</span>
          <span>Liên hệ</span>
        </td>
        <td>
          <button><span>Khoa</span></button>
        </td>
        <td>
          <button><span>Phòng</span></button>
        </td>
        <td>
          <img src="../Images/flag-english.png" alt="flag-english" />
        </td>
        <td>
          <span>English</span>
        </td>
      </tr>
    </table>
  </div>
  <div style="padding: 0 45px">
    <table width="100%">
      <tr>
        <td width="80%">
          <img src="../Images/logo-k_cntt.png" alt="logo-k_cntt" />
        </td>
        <td>
          <div class="search">
            <input class="txt-search" type="text" placeholder="Tìm kiếm thông tin" />
            <input type="button" class="btn-search" />
          </div>
        </td>
      </tr>
    </table>
  </div>
  <div style="padding: 0 45px; margin: 20px 0 20px 0">
    <table width="100%">
      <tr>
        <td><b>HOME</b></td>
        <td><b>GIỚI THIỆU</b></td>
        <td><b>TUYỂN SINH</b></td>
        <td><b>ĐÀO TẠO</b></td>
        <td><b>NGHIÊN CỨU KHOA HỌC</b></td>
        <td><b>HỢP TÁC</b></td>
        <td><b>SINH VIÊN</b></td>
        <td><b>CỰU SINH VIÊN</b></td>
        <td><b>LIÊN HỆ</b></td>
      </tr>
    </table>
  </div>
  <div style="background-color: #e8e8e8; margin: 0 45px; padding: 10px 20px">
    Trang chủ
  </div>
  <img src="../Images/Slider_KhoaCNTT_KN40namCB.jpg" style="width: 902px; margin: 10px 45px" />
</body>

</html>