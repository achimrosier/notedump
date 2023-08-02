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
    <h1><?php echo $_GET['id']; ?> <a href="edit.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info btn-mini"><i class="icon-edit icon-white"></i></a> <a href="delete.php?id=<?php echo $_GET['id']; ?>" class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></a> <a href="index.php" class="btn btn-info btn-mini">Back to the list</a></h1>
    <div class="note-view">
        <?php
        // Get the note ID from the URL
        $id = $_GET['id'];

        // Get the note content
        $file = fopen('notes/' . $id . '.txt', 'r');
        $content = fread($file, filesize('notes/' . $id . '.txt'));
        fclose($file);

        // Print the note content
        echo nl2br($content);
        ?>
    </div>
</body>

</html>