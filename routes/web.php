<?php
require_once __DIR__ . '/../app/controller/StudentController.php';

// Lấy request URI
$request = trim($_SERVER['REQUEST_URI'], '/');
$controller = new StudentController();

if (preg_match('/^uploads\/([\w\-\.]+)$/', $request, $matches)) {
    $file = __DIR__ . '/../app/public/uploads/' . $matches[1];

    if (file_exists($file) && is_file($file)) {
        $mimeType = mime_content_type($file);
        header("Content-Type: $mimeType");
        readfile($file);
    } else {
        http_response_code(404);
        echo "File not found.";
    }
    exit;
}

// Xử lý route
if ($request == '') {
    $controller->index();
} elseif ($request == 'create') {
    $controller->create();
} elseif ($request == 'store') {
    $controller->store();
} elseif (preg_match('/^detail\/(\w+)$/', $request, $matches)) {
    $controller->detail($matches[1]); // Truyền ID vào phương thức
}elseif (preg_match('/^edit\/(\w+)$/', $request, $matches)) {
    $controller->edit($matches[1]); // Lấy ID từ route
} elseif (preg_match('/^update\/(\w+)$/', $request, $matches)) {
    $controller->update($matches[1]);
} elseif (preg_match('/^delete\/(\w+)$/', $request, $matches)) {
    $controller->delete($matches[1]);
} else {
    echo "404 Not Found";
}
?>
