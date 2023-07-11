<?php

// PHP has 2 functions to handle.  
//json_decode() // converts a JSON object/array to serialized object accessible by PHP.
//json_encode() // converts a serialized object to a JSON object/array string.

// 1.1 basic json object
$basicJsonObject = '{"name":"Albaash247" , "age" : 274, "GPA": 3.15}';

//1.2 basic json array
$basicJsonArray = '["Apple", "Orange", "Dates", "Lemon" ]';


//1.3 json object with an array
$jsonObjectWithArray = '{"group": "group A", "scores": [92,66,87,67,59,78,55] }';


//1.4 array of objects 
$jsonArrayOfObjects = '[{"name":"Ahmed"}, {"name":"Saaed"}, {"name":"Saif"} ]';



//2.1 json_decode()
echo "<br><br>";
$decodedObject = json_decode($basicJsonObject, false);
echo "name : ".$decodedObject->name;
echo "<br>";
print_r($decodedObject);


echo "<br><br>";
$decodedArray = json_decode($basicJsonArray, false);
echo "first item ::".$decodedArray[0];
echo "<br> all items: ";
print_r($decodedArray) ;


echo "<br><br>";
$decodedObjectWithArray = json_decode($jsonObjectWithArray, false);
echo "scores : ".implode(", ",$decodedObjectWithArray->scores);
echo "<br>";
print_r($decodedObjectWithArray);

echo "<br><br>";
$decodedArrayOfObjects = json_decode($jsonArrayOfObjects, false);
echo "second item value :".$decodedArrayOfObjects[1]->name;
echo "<br> all items: ";
print_r($decodedArrayOfObjects) ;


//2.2 json_encode() 
echo "<br><br>";
$email = new stdClass();
$email->sender = "AlBaash247";
$email->receiver = "John Wick";
$email->body = "your next target is :<attachment>~!";
$email->attachment = range(7,14);

$encodedEmail = json_encode($email);
echo "$email->receiver";
echo "<br>$encodedEmail";

