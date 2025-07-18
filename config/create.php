<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $title, $content);
    mysqli_stmt_execute($stmt);
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Create Post</title></head>
<body>
    <h2>Create New Post</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content" rows="5" required></textarea><br>
        <button type="submit">Post</button>
    </form>
</body>
</html>
