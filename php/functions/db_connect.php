<?php

$dbhost="localhost";
$dbname="zakmedia";
$username="root";
$password="";

$db=new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_records_all(){
  global $db;
  $records = $db->query("SELECT * FROM records ORDER BY id DESC");
  return $records;
}

function get_last_records(){
  global $db;
  $records = $db->query("SELECT * FROM records ORDER BY id DESC LIMIT 4");
  return $records;
}

function get_category(){
  global $record;
  switch ($record["type"]) {
    case '1':
      return "Фильм";
      break;
    
      case '2':
        return "Марафон";
        break;
    
        case '3':
          return "Прочее";
          break;
  }
}
        