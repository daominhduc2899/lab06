<?php
include('template/headerandfunction.php');
?>
    <div class='show'>
    <form action='' method='post'>
        <table>
            <tr>
                <th colspan='2'>Sửa người dùng</th>
            </tr>
            <tr>
            <td>Họ Tên</td>
            <td><input type='text' name='newhoten' value=<?php echo $hoten?>></td>
            </tr>
            <tr>
            <td>Số điện thoại</td>
            <td><input type='text' name='newphonenumber' value=<?php echo $phonenumber?>></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type='text' name='newemail' value=<?php echo $email?>></td>
            </tr>
            <tr style='text-align:center'>
            <td colspan='2'><button type='submit' name='btnupdate'>Cập nhật</button></td>
            </tr>
        </table>
        <input type='hidden' name='iduser' value=<?php echo $iduser ?>>
        <input type='hidden' name='hoten' value=<?php echo $hoten ?>>
        <input type='hidden' name='phonenumber' value=<?php echo $phonenumber ?>>
        <input type='hidden' name='email' value=<?php echo $email ?>>
    </form>
    <?php if(isset($UpdateException)) echo "<h2 style='text-align:center; color:red'>Bạn hãy nhập thông tin hợp lệ</h2>"; ?>
    </div>
</div>
</body>
</html>