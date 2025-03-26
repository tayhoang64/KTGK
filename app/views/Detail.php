<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sinh viên</title>
</head>
<body>
    <h2>Thông tin chi tiết sinh viên</h2>
    <table border="1">
        <tr>
            <th>Mã SV</th>
            <td><?= htmlspecialchars($student['MaSV']) ?></td>
        </tr>
        <tr>
            <th>Họ tên</th>
            <td><?= htmlspecialchars($student['HoTen']) ?></td>
        </tr>
        <tr>
            <th>Giới tính</th>
            <td><?= htmlspecialchars($student['GioiTinh']) ?></td>
        </tr>
        <tr>
            <th>Ngày sinh</th>
            <td><?= htmlspecialchars($student['NgaySinh']) ?></td>
        </tr>
        <tr>
            <th>Hình</th>
            <td>
                <img src="<?= $imagePath ?>" width="150" alt="Ảnh sinh viên">
            </td>
        </tr>
    </table>

    <p>
        <a href="/edit/<?= htmlspecialchars($student['MaSV']) ?>">Sửa</a> |
        <a href="/delete/<?= htmlspecialchars($student['MaSV']) ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a> |
        <a href="/students">Quay lại danh sách</a>
    </p>
</body>
</html>