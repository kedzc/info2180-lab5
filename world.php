<?php
$host = 'localhost';
$username = 'lab5_user';
$password = '';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
if (!empty($_GET)){
  if (array_key_exists("all", $_GET) && $_GET['all'] == true){
    
    $stmt = $conn->query("SELECT * FROM countries");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<ul>';
    foreach ($results as $row) {
     echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
  }
  else if(array_key_exists("country", $_GET)){
    $country = $_GET['country'];
    $stmt = $conn->query("SELECT * FROM countries WHERE name = '$country'");
    

    echo '<ul>';
    foreach ($results as $row) {
        {
      echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
        }
    
    echo '</ul>';
  }
}
}
