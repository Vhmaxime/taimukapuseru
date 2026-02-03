<?php
$message = "Hello future me
If you are reading this, 10 years have passed.
Did we fix timezones yet?";

$createdAt = time();
$revealAt  = strtotime('+10 years', $createdAt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time Capsule</title>
</head>
<body>
<?php if (time() < $revealAt): ?>
    <h1>Time Capsule Locked</h1>
    <p>This message will be revealed on:</p>
    <strong><?= date('d/m/Y', $revealAt); ?></strong>
<?php else: ?>
    <h1>Time Capsule Opened</h1>
    <p><?= nl2br(htmlspecialchars($message)); ?></p>
<?php endif; ?>
</body>
</html>

