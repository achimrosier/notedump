<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quick Note</title>
</head>
<body>
    <h1>Quick Note</h1>
    <ul>
        <?php
        // Get all the notes
        $files = glob('notes/*.txt');

        // Loop through the notes
        foreach ($files as $file) {
            // Get the note title
            $title = basename($file, '.txt');

            // Print a link to the note
            if ($title !== 'last_note_number') {
              echo '<li><a href="view.php?id=' . $title . '">' . $title . '</a> <a href="edit.php?id=' . $title . '">Edit</a> <a href="delete.php?id=' . $title . '">Delete</a></li>';

            } else {

            }
        }
        ?>
    </ul>
    <p><a href="save.php">Add a new note</a></p>
  
      <h1>NoteDump</h1>
    <form action="save.php" method="post">
        <textarea name="note" placeholder="Your note" style="width: 100%; height: 50vh;"></textarea>
        <input type="submit" value="Save">
    </form>
  
  <?php
  $file = fopen('notes/last_note_number.txt', 'r');
        $current_note_nr = fread($file, filesize('notes/last_note_number.txt'));
        fclose($file);
		$current_note_nr++;  
 		echo '</br>volgnummer volgende notitie: '. $current_note_nr++ . '</br>';
  ?>
  <form action="save_note_numer.php" method="post">

                <input type="text" name="last_note_number" placeholder="New last note number" style="width: 100px; height: 20px;">
                  <input type="submit" value="SaveNumber">
    </form>
</body>
</html>
