<?php

// Get the note ID from the URL
$id = $_GET['id'];

// Delete the note
unlink('notes/' . $id . '.txt');

// Redirect the user back to the list
header('Location: index.php');

?>
