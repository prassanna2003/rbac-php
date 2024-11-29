<?php
require_once 'User.php';

$user1 = new User();
$user1->set_username("raghs");
$user1->set_password("raghs");
$user1->set_role("SuperUser");

echo $user1->get_username();
echo "<br/>";
echo $user1->get_password();
echo "<br/>";
echo $user1->get_role();
echo "<br/>";

echo "<hr/>";

$user2 = new User();
$user2->set_username("prasanna");
$user2->set_password("prasanna");
$user2->set_role("FinanceUser");

echo $user2->get_username();
echo "<br/>";
echo $user2->get_password();
echo "<br/>";
echo $user2->get_role();

?>
