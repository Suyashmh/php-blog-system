<?php
require_once '../config/db.php';
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "UPDATE posts SET title=?, content=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $title, $content, $id);
    mysqli_stmt_execute($stmt);
    header("Location: ../index.php");
}
$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Post</title></head>
<body>
    <h2>Edit Post</h2>
    <form method="POST">
        <input type="text" name="title" value="<?= $post['title'] ?>" required><br>
        <textarea name="content" rows="5" required><?= $post['content'] ?></textarea><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
