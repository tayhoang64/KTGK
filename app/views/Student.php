<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        /* Định dạng tổng thể */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #343a40;
        }

        /* Nút thêm sinh viên */
        a.add-btn {
            display: inline-block;
            text-decoration: none;
            background: #28a745;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        a.add-btn:hover {
            background: #218838;
        }

        /* Bảng dữ liệu */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #007bff;
            color: white;
        }

        /* Ảnh sinh viên */
        img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }

        /* Hành động */
        .actions a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 3px;
            display: inline-block;
        }

        .detail-btn {
            background: #17a2b8;
            color: white;
        }

        .edit-btn {
            background: #ffc107;
            color: black;
        }

        .delete-btn {
            background: #dc3545;
            color: white;
        }

        .actions a:hover {
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <a href="/create" class="add-btn">Thêm sinh viên</a>
    <table>
        <tr>
            <th>Mã SV</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Hình</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= htmlspecialchars($student['MaSV']) ?></td>
                <td><?= htmlspecialchars($student['HoTen']) ?></td>
                <td><?= htmlspecialchars($student['GioiTinh']) ?></td>
                <td><?= htmlspecialchars($student['NgaySinh']) ?></td>
                <td><img src="<?= htmlspecialchars($student['Hinh']) ?>" alt="Ảnh sinh viên"></td>
                <td class="actions">
                    <a href="/detail/<?= htmlspecialchars($student['MaSV']) ?>" class="detail-btn">Chi tiết</a>
                    <a href="/edit/<?= htmlspecialchars($student['MaSV']) ?>" class="edit-btn">Sửa</a>
                    <a href="/delete/<?= htmlspecialchars($student['MaSV']) ?>" class="delete-btn" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
