<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Sinh Viên</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h2>Chỉnh Sửa Sinh Viên</h2>
    <form action="/update/<?= $student['MaSV'] ?>" method="post">
        <input type="hidden" name="MaSV" value="<?= $student['MaSV'] ?>">

        <label>Họ Tên:</label>
        <input type="text" name="HoTen" value="<?= $student['HoTen'] ?>" required>

        <label>Giới Tính:</label>
        <select name="GioiTinh">
            <option value="Nam" <?= $student['GioiTinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
            <option value="Nữ" <?= $student['GioiTinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
        </select>

        <label>Ngày Sinh:</label>
        <input type="date" name="NgaySinh" value="<?= $student['NgaySinh'] ?>" required>

        <label>Hình ảnh (URL):</label>
        <input type="file" name="Hinh" value="<?= $student['Hinh'] ?>">

        <label>Ngành Học:</label>
        <input type="text" name="MaNganh" value="<?= $student['MaNganh'] ?>" required>

        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>
