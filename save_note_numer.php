<?php

unlink('notes/last_note_number.txt');

// Open the notes file
$file = fopen('notes/last_note_number.txt', 'a');

// Get the note from the POST request
//$note = '';
$note = $_POST['last_note_number'];

// Write the note to the file
fwrite($file, $note . PHP_EOL);

// Close the file
fclose($file);

echo $note;

// Redirect the user back to the main page
header('Location: index.php');

?>
