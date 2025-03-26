<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h2>Thêm Sinh Viên</h2>
    <form action="/store" method="post" enctype="multipart/form-data"> 
        <label>Mã SV:</label>
        <input type="text" name="MaSV" required>

        <label>Họ Tên:</label>
        <input type="text" name="HoTen" required>

        <label>Giới Tính:</label>
        <select name="GioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>

        <label>Ngày Sinh:</label>
        <input type="date" name="NgaySinh" required>

        <label>Hình ảnh (URL):</label>
        <input type="file" name="Hinh">

        <label>Ngành Học:</label>
        <input type="text" name="MaNganh" required>

        <button type="submit">Thêm Sinh Viên</button>
    </form>
</body>
</html>
