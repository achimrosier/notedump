<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quick Note</title>
</head>
<body>
    <h1>Quick Note</h1>
    <form action="save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <textarea name="note" placeholder="Your note" style="width: 100%; height: 100px;"><?php echo file_get_contents('notes/' . $_GET['id'] . '.txt'); ?></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>
