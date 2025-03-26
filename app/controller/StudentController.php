<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    public function index() {
        $studentModel = new Student();
        $students = $studentModel->getAllStudents();
        require_once __DIR__ . '/../views/Student.php';
    }

    public function detail($id) {
        $studentModel = new Student();
        $student = $studentModel->getStudentById($id);
    
        // Kiểm tra xem sinh viên có tồn tại không
        if (!$student) {
            echo "Không tìm thấy sinh viên!";
            exit;
        }
    
        require_once __DIR__ . '/../views/Detail.php';
    }
    

    public function create() {
        require_once __DIR__ . '/../views/Add_student.php';
    }

    public function store() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uploadDir = __DIR__ . '/../public/uploads/'; // Thư mục lưu ảnh
            $imagePath = '';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Tạo thư mục với quyền ghi
            }
            
            // Xử lý upload ảnh
            if (!empty($_FILES['Hinh']['name'])) {
                $fileName = basename($_FILES['Hinh']['name']);
                $targetFile = $uploadDir . $fileName;
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    
                if (in_array($fileType, $allowedTypes)) {
                    if (move_uploaded_file($_FILES['Hinh']['tmp_name'], $targetFile)) {
                        $imagePath = '/uploads/' . $fileName; // Đường dẫn ảnh được lưu
                    } else {
                        echo "Lỗi khi tải lên hình ảnh.";
                        return;
                    }
                } else {
                    echo "Chỉ chấp nhận file JPG, JPEG, PNG, GIF.";
                    return;
                }
            }
    
            // Thêm sinh viên vào database
            $studentModel = new Student();
            $studentModel->addStudent(
                $_POST['MaSV'],
                $_POST['HoTen'],
                $_POST['GioiTinh'],
                $_POST['NgaySinh'],
                $imagePath, // Đường dẫn ảnh
                $_POST['MaNganh']
            );
    
            header("Location: /");
        }
    }    

    public function edit($id) {
        $studentModel = new Student();
        $student = $studentModel->getStudentById($id);
        require_once __DIR__ . '/../views/Edit_student.php';
    }

    public function update($id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $studentModel = new Student();
            $studentModel->updateStudent($id, $_POST['HoTen'], $_POST['GioiTinh'], $_POST['NgaySinh'], $_POST['Hinh'], $_POST['MaNganh']);
            header("Location: /");
        }
    }

    public function delete($id) {
        $studentModel = new Student();
        $studentModel->deleteStudent($id);
        header("Location: /");
    }
}
?>
