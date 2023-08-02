<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NoteDump</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/extra.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1><?php echo $_GET['id']; ?></h1>
    <form action="save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <textarea name="note" placeholder="empty note" style="width: 100%; height: 80vh;"><?php echo file_get_contents('notes/' . $_GET['id'] . '.txt'); ?></textarea>
        <input type="submit" value="Save">
    </form>
</body>

</html>