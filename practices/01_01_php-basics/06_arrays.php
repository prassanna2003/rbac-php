<?php

echo "<h1>PHP Arrays</h1>";
echo "<b>Reference To Read Later : </b>
  <a href='https://www.w3schools.com/php/php_ref_array.asp'>PHP Array Reference - W3 Schools</a>";
echo "<hr/>";

echo "<h2>Indexed Array</h2>";

$scores = array(1, 2, 3, 4, 5, "PHP", 6, "HTML", '7', 8);

echo "Scores Array (pre): <br/>";
echo "<pre>", print_r($scores) , "</pre>" ;
echo "<hr/>";

echo "Scores Array (var_dump): <br/>";
echo "<pre>", var_dump($scores) , "</pre>" ;

echo "<hr/>";

echo "Scores Array Size : " . count($scores) . "<br/>";

echo "<hr/>";

echo "<h3>Scores Array Elements are :: </h3>";

foreach ($scores as $key => $value) {
  echo "$key, $value <br/>";
}

echo "<hr/>";

echo "<h2>Associative Array</h2>";

$names = array('R' => 'Raghavan', "Age" => 43, 'P' => "Prasanna", "Age" => '21', "S" => "Sathish", 'Age' => 41);

echo "Names Array (pre): <br/>";
echo "<pre>", print_r($names) , "</pre>" ;
echo "<hr/>";

echo "Names Array (var_dump): <br/>";
echo "<pre>", var_dump($names) , "</pre>" ;

echo "<hr/>";

echo "Names Array Size : " . count($names) . "<br/>";

echo "<hr/>";

echo "<h3>Names Array Elements are :: </h3>";

foreach ($names as $key => $value) {
  echo "$key, $value <br/>";
}

echo "<hr/>";
?>
