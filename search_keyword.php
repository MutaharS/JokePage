<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
    
    <style>
        font-family: Arial, Helvetica, sans-serrif;
    </style>
    
</head>


<?php
// Search the database for the word chicken

include "database_connect.php";
$keyword_from_form = $_GET["keyword"];


echo "<h2>Show all jokes with keyword: $keyword_from_form </h2>";
$sql = "SELECT Joke_question, Joke_answer FROM Jokes_table WHERE Joke_question LIKE '%" . $keyword_from_form . "%'";
$result = $mysqli->query($sql);


?>

<div id="accordion">

<?php
// if there are any values in our table, output them
  while($row = $result->fetch_assoc()) {
      //echo "id: " . $row["JokeID"]. " - Joke_question: " . $row["Joke_question"]. " - Joke Answer: " . $row["Joke_answer"]. "<br>";
      echo "<h3>$row[Joke_question]</h3>";
      echo "<div><p>$row[Joke_answer]</p></div>";
  }
 
?>
    
</div>