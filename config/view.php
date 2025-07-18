<?php
require_once '../config/db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><title><?= $post['title'] ?></title></head>
<body>
    <h1><?= $post['title'] ?></h1>
    <p><?= nl2br($post['content']) ?></p>
    <a href=\"edit.php?id=<?= $post['id'] ?>\">Edit</a> | 
    <a href=\"delete.php?id=<?= $post['id'] ?>\" onclick=\"return confirm('Delete this post?')\">Delete</a><br>
    <a href=\"../index.php\">Back to Home</a>
</body>
</html>
