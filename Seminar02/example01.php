<?php
$name = "Admin";
$isEnter = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if ($isEnter): ?>
    Hello, <?= $name ?>
<?php else: ?>
    <form action="">
        <input type="text" placeholder="Enter login">
    </form>
<?php endif; ?>
</body>
</html>