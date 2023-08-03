<?php

define('FILEPREFIX',"notedump");

// Get the current date and format for filenam
$date = new DateTime();
$formatted_date = $date->format('Ymd_His');

// Get the note ID from the POST request
if (isset($_POST['id'])) {  // id is setted when editing existing notes
    $note_filename = $_POST['id'];
  	unlink('notes/' . $note_filename . '.txt');
} else {
  // note doesn't exist, so create filename 
  $note_filename = FILEPREFIX . "_" . $formatted_date;
}

// Open the notes file
$file = fopen('notes/' . $note_filename . '.txt', 'a');

// Get the note from the POST request
$note = $_POST['note'];

// Write the note to the file
fwrite($file, $note . PHP_EOL);

// Close the file
fclose($file);

// Redirect the user back to the main page
header('Location: index.php');

?>