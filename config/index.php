<?php
require_once 'config/db.php';
$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>My PHP Blog</h1>
        <a href="posts/create.php" class="btn">Create New Post</a>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="post">
                <h2><?= $row['title'] ?></h2>
                <p><?= substr($row['content'], 0, 100) ?>...</p>
                <a href="posts/view.php?id=<?= $row['id'] ?>">Read More</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
