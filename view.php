<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quick Note</title>
</head>
<body>
    <h1>Quick Note view</h1>
    <p>
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
    </p>
    <p><a href="index.php">Back to the list</a></p>
</body>
</html>
