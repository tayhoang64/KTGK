<?php
require_once 'db.php';

class Student {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllStudents() {
        $sql = "SELECT * FROM SinhVien";
        return $this->db->getConnection()->query($sql)->fetchAll();
    }

    public function getStudentById($id) {
        $sql = "SELECT * FROM SinhVien WHERE MaSV = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function addStudent($maSV, $hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh) {
        $sql = "INSERT INTO SinhVien (MaSV, HoTen, GioiTinh, NgaySinh, Hinh, MaNganh) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->getConnection()->prepare($sql);
        return $stmt->execute([$maSV, $hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh]);
    }

    public function updateStudent($maSV, $hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh) {
        $sql = "UPDATE SinhVien SET HoTen = ?, GioiTinh = ?, NgaySinh = ?, Hinh = ?, MaNganh = ? WHERE MaSV = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        return $stmt->execute([$hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh, $maSV]);
    }

    public function deleteStudent($id) {
        $sql = "DELETE FROM SinhVien WHERE MaSV = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
