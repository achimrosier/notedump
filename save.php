<?php

// Get the note ID from the POST request
if (isset($_POST['id'])) {  // id is setted when editing existing notes
    $note_filename = $_POST['id'];
  	unlink('notes/' . $note_filename . '.txt');
} else {
    // Get the last note number
  $last_note_number = file_get_contents('notes/last_note_number.txt');
  // Increment the last note number 
  $last_note_number++;
  $note_filename = 'NoteDump_' . $last_note_number;
  // Write the last note number to the file
file_put_contents('notes/last_note_number.txt', $last_note_number);
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
