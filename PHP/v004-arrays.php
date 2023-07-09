<?php

//(***) =====##### indexed and associative arrays.

//(1) =====##### ways to create arrays in PHP, including:
//1.1 Using the array() function
//1.2 Using the square brackets []
//1.3 Using the range() function
//1.4 associative array.

//1.1
$numbers = array(1,2,3,4,5,6,7,8,9,10);

//1.2
$names = ["Earth", "Moon", "Sun", "Stars"];

//1.3
$alphabet = range("A", "Z");

//1.4
$students = array("student_1"=> "John Doe", "student_2"=>"Jack Sparrow");



//(2) =====##### useful built-in functions

//2.1 print_r : prints array index and elements
echo "<br><br>";
print_r($numbers);
echo "<br>";
print_r($students);


//2.2 count(): returns the number of elements in an array
echo "<br><br>";
echo "numbers count is : ". count($numbers);


//2.3 sort(): sorts the elements of an array
echo "<br><br>";
$scores = array(55,90,68,72,65,78,80,70);
echo "unsorted scores : ".implode(", ", $scores);
sort($scores);
echo "<br> sorted scores : ".implode(", ", $scores);


//2.4 array_keys(): returns all the keys of an array
echo "<br><br>";
echo "students array keys : ".implode(", ", array_keys($students));


//2.5 array_unique(): removes duplicate values from an array
echo "<br><br>";
$products = ["TV", "Phone", "Radio", "TV","Phone", "TV"];
echo "products array : ".implode(", ", $products);
echo "<br>products array (no-duplicates): ".implode(", ", array_unique($products));


//2.6 array_merge(): merge 2 or more arrays together
echo "<br><br>";
$a1 = range(1,5);
$a2 = range(6,10);
echo "merge a1 and a2 in a3";
$a3 = array_merge($a1 , $a2);
echo "<br>".implode(", ", $a3);



// 2.7 array_filter() : filter the elements of an array
echo "<br><br>";
$evenNumber = array_filter($a3, function($n){return $n % 2 == 0;});
echo implode(", ", $evenNumber);



//(3)  =====##### Loops - for, foreach

//3.1
echo "<br><br>";
for ($i=0; $i < count($names); $i++) { 
  
  echo "{$names[$i]} ";
  
}


//3.2.1
echo "<br><br>";
foreach($students as $value){
echo "$value ";
}

//3.2.2
echo "<br><br>";
foreach ($students as $key => $value) {
  echo "$key => $value <br>";
}

