<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type='text/css' href="template/index2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <div class='headermanagement' style='height:100px;
     background-color:green; display:flex;'>
    <h1 style='margin:auto;'>Trang quản trị</h1>
    </div>
    <div class='content'>
    <div class='function'>
    <div id='search_user'>
        <form action='TimKiemNguoiDung' method='post'>
            <input type='text' name='keysearch' placeholder='Tìm kiếm người dùng'>
            <button type='submit'><i class="fas fa-search"></i></button>
        </form>
    </div>
    <ul class='chucnangquantri'>
        <li class='usermanagement'>
            <a href='' class='usermanegementfunctions'>Quản trị người dùng</a>
            <div class='quantringuoidung'>
              <ul>
                <li><a href='DanhSachNguoiDung'>Danh sách người dùng</a></li>
                <li><a href='ThemNguoiDung'>Thêm người dùng</a></li>
              </ul>
            </div>
        </li>
    </ul>
    </div>