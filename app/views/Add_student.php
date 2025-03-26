<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <style>
        /* Định dạng tổng thể */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Định dạng tiêu đề */
        h2 {
            text-align: center;
            color: #333;
        }

        /* Định dạng form */
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Định dạng nhãn (label) */
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        /* Định dạng input, select */
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Định dạng nút bấm */
        button {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background: #218838;
        }

        /* Định dạng input file */
        input[type="file"] {
            border: none;
        }
    </style>
</head>
<body>
    <form action="/store" method="post" enctype="multipart/form-data"> 
        <h2>Thêm Sinh Viên</h2>
        
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

        <label>Hình ảnh:</
