<?php

echo "Hello World " . "another statement <br>";

print "print statement" . "another";

// $str = "ebad";  //string
// echo "i am ".$str . "<br>";

// $age = 34;  //integer
// echo $age . "<br>";

// $percent = 2.4;     //float
// echo $percent . "<br>";
// $bool = true;
// echo var_dump($str) . "<br>";
// echo var_dump($age) . "<br>";
// echo var_dump($percent) . "<br>";
// echo var_dump($bool) . "<br>";

// //indexed array

// $num = array(1,3,5,6,7,8);  //first method 
// echo "<pre>";
// echo print_r($num);
// echo "</pre>";


// $str = ["Ebad", "Hassan", "Sameer", "Ali"];     //second method
// echo "<pre>";
// echo print_r($str);
// echo "</pre>";


    //third method
// $fruits[0] = "Grapes";
// $fruits[1] = "apple";
// $fruits[2] = "Banana";
// // echo "<pre>";
// // echo print_r($fruits);
// // echo "</pre>";

// // Print array by using for loop 
// echo "<h3> Printing array by using for loop</h3>";
// for($i = 0; $i < count($fruits); $i++){
//     echo "$i) $fruits[$i] <br>" ;
// }


// // while loop

// // variable declaration
// // while(condition){
//     //statement
// // }


// echo "<h3> Printing array by using do-while loop</h3>";
// // while($j < count($fruits)){
//     //     echo "$fruits[$j] <br>";
//     //     $j++;
//     // }
    
//     // do while
    
// $j = 0;
// do{
//     echo "$fruits[$j] <br>";
//     $j++;
// }
// while($j < count($fruits));

// echo "<h3> Printing array by using forEach loop</h3>";


// foreach($fruits as $val){
//     echo "$val <br>";
// }







// // indexed array , associative array, multidimensional array

// // associative array

// $marks = array(
//     "physics" => 45,
//     "CS" => 100,
//     "English" => 65
// );

// foreach($marks as $key => $val){
//     echo "$key = $val <br>";
// }

// // echo $marks["physics"];
// // print_r($marks);


// // Multidimensional indexed arrays
// echo "<h3> Multidimensional indexed array</h3>";

// $results = [
//     [34, 56, 86],
//     [83, 77, 88],
//     [23, 99, 88]
// ];

// echo "<pre>";
// print_r($results);
// echo "</pre>";

// foreach($results as $v){
//     // foreach($v as $e){
//     //     echo "$e <br>";
//     // }
//     echo "<pre>";
//     print_r($v);
//     echo "</pre>";
// }


// $cars = [
//     "Honda" => ["civic" => 10000000, "city" => "6000000", "Accord" => 1500000],
//     "Toyota" => ["Corolla" => 9000000, "Yaris" => 5000000, "Cross" => 1500000]
// ];
// echo "<pre>";
//     print_r($cars);
//     echo "</pre>";

// foreach($cars as $k => $val){
    //     // echo $k;
    //     // echo "<pre>";
//     // print_r($val);
//     // echo "</pre>";
//     echo "$k <br>";
//     foreach($val as $name => $price){
//         echo "$name = $price <br>";
//     }

// }

// echo "<h3> Multidimensional indexed array</h3>";

// $vegies = [
//     "category-1" => ["veg1" => "Baigan", "veg2" => "Gajar", "veg3" => "Aalu"],
//     "category-2" => ["veg1" => "Loky","veg2" => "tindy", "veg3" => "Mooli"],
//     "category-3" => ["veg1" => "ShimlaMirch", "veg2" => "BariMirch", "veg3" => "KaaliMirch"]
// ];

// // $length = count($vegies);
// // echo $length;
// // echo "<pre>";
// // print_r($vegies);
// // echo "</pre>";
// foreach($vegies as $key => $val){
//     echo "<b> $key </b><br>";
//   foreach($val as $k => $v){
//     echo "$k = $v <br>";
//   }
// }


// $array = array("ebad", "ali", "usman");

// foreach ($array as $key) {
//   echo $key;
// }

$vegies = [
  "category-1" => ["veg1" => "Baigan", "veg2" => "Gajar", "veg3" => "Aalu"],
  "category-2" => ["veg1" => "Loky","veg2" => "tindy", "veg3" => "Mooli"],
  "category-3" => ["veg1" => "ShimlaMirch", "veg2" => "BariMirch", "veg3" => "KaaliMirch"]
];

// foreach($vegies as $k => $v){
//   echo "$k = $v . <br>"; 
// }

$arr = [1,2,3,4,5];
for($i = 0; $i < count($arr); $i++){
echo $arr[$i];
}



function fullname ($firstname, $lastname){
echo $firstname . $lastname;  
}
fullname("Al", "ahmed");











































?>