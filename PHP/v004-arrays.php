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
$names = ["Earth", "Moon", "Stars", "Sun", "Sky"];

//1.3
$alphabet = range("A", "Z");

//1.4 =====##### indexed and associative arrays.
$associativeArray = array("person_1"=> "John Doe", "person_2"=>"Jack Sparrow");




//(3) =====##### useful built-in functions


//3.1 print_r : prints array index and elements
echo "<br><br>";
print_r($names);
echo "<br>";
print_r($associativeArray);


//3.2 count(): returns the number of elements in an array
echo "<br><br>";
echo "numbers array count is: ".count($numbers);

//3.3 sort(): sorts the elements of an array
echo "<br><br>";
$scores = array(55,90,68,72,65,78,80,70);
echo "unsorted scores : ".implode(", ", $scores);
sort($scores);
echo "<br> sorted scores : ".implode(", ", $scores);

// 3.4 array_keys(): returns all the keys of an array
echo "<br><br>";
echo " array keys are : ". implode(", ", array_keys($associativeArray));

// 3.5 array_unique(): removes duplicate values from an array
echo "<br><br>";
$products = ["TV", "Phone", "HandWatch", "TV" ,"Phone","HandWatch"];
echo "products ".implode(", ", $products);
echo "<br> remove duplicates <br>";
echo "products ".implode(", ", array_unique($products));

// 3.6 array_merge(): merge 2 or more arrays together
echo "<br><br>";
$a1 = [1,2,3,4,5];
$a2 = [6,7,8,9,10];
echo "merge a1 and a2 in a3";
$a3 = array_merge($a1,$a2);
echo "<br> a3 = ".implode(", ", $a3);


// 3.7 array_filter() : filter the elements of an array
echo "<br><br>";
$evenNumbers = array_filter($numbers, function($n){return $n % 2 == 0; });
echo implode(", ",$evenNumbers);




//(4) =====##### Loops - for, foreach
echo "<br><br>";

//4.1 for
for ($i=0; $i < count($names); $i++) { 
  echo "{$names[$i]} ";
}

echo "<br><br>";

//4.2.1 foreach
foreach ($associativeArray as  $value) {
    echo "$value  ";
}
  
echo "<br><br>";

//4.2.2 foreach
foreach ($associativeArray as $key => $value) {
    echo " $key -> $value <br>";
}