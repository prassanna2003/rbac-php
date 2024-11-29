<h1>PHP String Operations</h1>

<?php
echo 'Comparing two string "Hello world!","Hello world!"<br/>';
echo strcmp("Hello world!","Hello world!");
echo "<hr/>";

if(strcmp("Hello world!","Hello world!")==0) {
  echo "The two strings match [Hello world!]";
} else {
  echo "The two strings <b>do NOT</b> match [Hello world!]";
}
?>
