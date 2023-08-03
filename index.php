<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NoteDump</title>
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/extra.css" rel="stylesheet" type="text/css" />
</head>
<h1>NoteDump</h1>

<body>
  <div class="note-list">
    <?php
    // Get all the notes
    $files = glob('notes/*.txt');

    // Loop through the notes
    foreach ($files as $file) {
      // Get the note title
      $title = basename($file, '.txt');

      // Print a link to the note
      echo '<div class="row">
        <div class="col view-file">' . $title . '</div>
        <div class="col view"><a href="view.php?id=' . $title . '" class="btn btn-success btn-mini"><i class="icon-eye-open icon-white"></i></a></div>
        <div class="col edit"><a href="edit.php?id=' . $title . '" class="btn btn-info btn-mini"><i class="icon-edit icon-white"></i></a></div>
        <div class="col delete"><a href="delete.php?id=' . $title . '" class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></a></div>
        </div>';
    }
    ?>
  </div>
  <div class=""><a href="save.php" class="btn btn-outline-secondary"><i class="icon-plus"></i> add new empty note</a></div>

  <div class="new-note-input">
    <form action="save.php" method="post">
      <textarea name="note" placeholder="your note" style="width: 100%; height: 50vh;"></textarea>
      <input type="submit" class="btn btn-outline-secondary" value="save content to new note">
    </form>
  </div>

</body>

</html>