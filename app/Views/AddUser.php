<?php
include('template/headerandfunction.php');
?>
    <div class='show'>
    <form action='' method='post'>
        <table>
            <tr>
                <th colspan='2'>Thêm người dùng</th>
            </tr>
            <tr>
            <td>Họ Tên</td>
            <td><input type='text' name='hoten'></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type='email' name='email'></td>
            </tr>
            <tr>
            <td>Số điện thoại</td>
            <td><input type='text' name='phonenumber'></td>
            </tr>
            <tr>
            <td>Tên tài khoản</td>
            <td><input type='text' name='username'></td>
            </tr>
            <tr>
            <td>Mật khẩu</td>
            <td><input type='password' name='password'></td>
            </tr>
            <tr>
            <td>Nhập lại mật khẩu</td>
            <td><input type='password' name='pass_confirm'></td>
            </tr>
            <tr style='text-align:center'>
            <td colspan='2'><button type='submit' name='btnadd'>Thêm</button></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($AddException)){
        echo "<h2 style='text-align:center; color:red'>Bạn hãy nhập thông tin hợp lệ</h2>";
        if(isset($UserExistException))
        echo "<h2 style='text-align:center; color:red'>Tên tài khoản đã tồn tại</h2>";
        if(isset($PasswordException))
        echo "<h2 style='text-align:center; color:red'>Mật khẩu nhập lại không khớp</h2>";
    }
    ?>
    </div>
</div>
</body>
</html>