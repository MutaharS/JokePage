<?php
// add joke to database

include "database_connect.php";
$new_joke_question = addslashes( $_GET["newjoke"] );
$new_joke_answer = addslashes ( $_GET["newanswer"] );


echo "<h2>Trying to add new joke: $new_joke_question and $new_joke_answer </h2>";

$sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer' )";
$result = $mysqli->query($sql) or die($mysqli->error);

include "search_all_jokes.php";
?>

<a href="index.php">Return to main page</a>