<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Sinh Viên</title>
    <style>
        /* Định dạng tổng thể */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Tiêu đề */
        h2 {
            color: #333;
            text-align: center;
        }

        /* Form */
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 500px;
        }

        /* Nhãn */
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        /* Input và Select */
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Nút cập nhật */
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

        /* Responsive */
        @media (max-width: 600px) {
            form {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <h2>Chỉnh Sửa Sinh Viên</h2>
    <form action="/update/<?= $student['MaSV'] ?>" method="post">
        <input type="hidden" name="MaSV" value="<?= $student['MaSV'] ?>">

        <label>Họ Tên:</label>
        <input type="text" name="HoTen" value="<?= htmlspecialchars($student['HoTen']) ?>" required>

        <label>Giới Tính:</label>
        <select name="GioiTinh">
            <option value="Nam" <?= $student['GioiTinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
            <option value="Nữ" <?= $student['GioiTinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
        </select>

        <label>Ngày Sinh:</label>
        <input type="date" name="NgaySinh" value="<?= htmlspecialchars($student['NgaySinh']) ?>" required>

        <label>Hình ảnh (URL):</label>
        <input type="file" name="Hinh">

        <label>Ngành Học:</label>
        <input type="text" name="MaNganh" value="<?= htmlspecialchars($student['MaNganh']) ?>" required>

        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>
