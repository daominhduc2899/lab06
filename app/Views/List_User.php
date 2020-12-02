
<?php
include('template/headerandfunction.php');
?>
    <div class='show'>
    <table>
        <tr>
            <th>Họ Tên</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Sửa|Xóa</th>
        </tr>
        <?php
        foreach($users as $row){
        ?>
        <tr>
            <td><?php echo $row->hoten?></td>
            <td><?php echo $row->phonenumber?></td>
            <td><?php echo $row->email?></td>
            <td>
                <div id='update' style='width:50%; float:left'>
                <form action='SuaNguoiDung' method='post'>
                    <input type='hidden' name='iduser' value=<?php echo $row->iduser?>>
                    <input type='hidden' name='hoten' value=<?php echo $row->hoten?>>
                    <input type='hidden' name='phonenumber' value=<?php echo $row->phonenumber?>>
                    <input type='hidden' name='email' value=<?php echo $row->email?>>
                    <button type='submit' name='btnsua' style='background-color:orange'><i class="fas fa-pencil-alt"></i>Sửa</button>
                </form>
                </div>
                <div id='delete' style='width:50%; float:left'>
                <form action='XoaNguoiDung' method='post'>
                    <input type='hidden' name='iduser' value=<?php echo $row->iduser?>>
                    <button type='submit' name='btnxoa' style='background-color:red'><i class="fas fa-trash-alt"></i>Xóa</button>
                </form>
                </div>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
    </div>
    </body>
</html>