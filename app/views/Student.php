<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <a href="/create">Thêm sinh viên</a>
    <table border="1">
        <tr>
            <th>Mã SV</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Hinh</th>
            <th>Hành động</th>
        </tr>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td><?= $student['MaSV'] ?></td>
                    <td><?= $student['HoTen'] ?></td>
                    <td><?= $student['GioiTinh'] ?></td>
                    <td><?= $student['NgaySinh'] ?></td>
                    <td><img src="<?php echo htmlspecialchars($student['Hinh']); ?>" width="100"></td>
                   
    <img src="<?= $imagePath ?>" width="100">
</td>


                    <td>
                        <a href="/detail/<?= $student['MaSV'] ?>">Chi tiet</a>
                        <a href="/edit/<?= $student['MaSV'] ?>">Sửa</a>
                        <a href="/delete/<?= $student['MaSV'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
