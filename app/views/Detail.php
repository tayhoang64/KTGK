<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sinh viên</title>
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
        }

        /* Bảng chi tiết */
        table {
            width: 60%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #28a745;
            color: white;
            text-align: left;
        }

        td {
            background: #fff;
        }

        /* Ảnh sinh viên */
        img {
            display: block;
            margin: 10px auto;
            border-radius: 8px;
            border: 2px solid #ddd;
        }

        /* Nút điều hướng */
        p {
            margin-top: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            background: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            margin: 5px;
            display: inline-block;
        }

        a:hover {
            background: #0056b3;
        }

        /* Nút xóa */
        a:nth-child(2) {
            background: #dc3545;
        }

        a:nth-child(2):hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <h2>Thông tin chi tiết sinh viên</h2>
    <table>
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
        <a href="/edit/<?= htmlspecialchars($student['MaSV']) ?>">Sửa</a>
        <a href="/delete/<?= htmlspecialchars($student['MaSV']) ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
        <a href="/students">Quay lại danh sách</a>
    </p>
</body>
</html>
