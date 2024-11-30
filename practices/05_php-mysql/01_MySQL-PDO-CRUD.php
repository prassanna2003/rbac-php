<?php

/*
  Things we need to connect to the database
  -----------------------------------------
  1. Name of the database
  2. Databae Driver (most important software to talk to the concenred database at runtime)
  3. Details of the database
      - Hostname OR IP Address
      - Port number
      - Database Name
      - UserName
      - Password
*/

/*
  Reference : SQL DDL for Test Table
  ----------------------------------
  CREATE TABLE `test`.`test`
  (
    `ID` INT NOT NULL AUTO_INCREMENT ,
    `Name` VARCHAR(20) NOT NULL ,
    PRIMARY KEY (`ID`)
  ) ENGINE = InnoDB COMMENT = 'Test Table for Test Database';

  Sample DML Values
  -----------------
  INSERT INTO Test (Name) VALUES ('raghs');
  INSERT INTO Test (Name) VALUES ('prasanna');
  INSERT INTO Test (Name) VALUES ('Ravindran');
  INSERT INTO Test (Name) VALUES ('Sathish');
*/

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br/>";

  $stmt = $conn->prepare("SELECT id, name FROM test");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo var_dump($v) . "<br/>";
  }

  echo "Records fetched successfully <br/>";

  echo "<hr/>";

  $sql = "INSERT INTO test (Name) VALUES ('PHP-PDO-MySQL')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully<br/>";

  echo "<hr/>";

  $stmt = $conn->prepare("SELECT id, name FROM test");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo var_dump($v) . "<br/>";
  }

  echo "Records fetched successfully <br/>";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

  $sql = "UPDATE test SET name='RBAC-PHP' WHERE id>4";
  //$sql = "UPDATE test SET name='RBAC-PHP'"; //Risky, as it will update ALL the records!

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";

  echo "<hr/>";

  $stmt = $conn->prepare("SELECT id, name FROM test");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo var_dump($v) . "<br/>";
  }

  echo "Records fetched successfully <br/>";

  // sql to delete a record
  $sql = "DELETE FROM test WHERE id>4";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully <br/>";

  echo "<hr/>";

  $stmt = $conn->prepare("SELECT id, name FROM test");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo var_dump($v) . "<br/>";
  }

  echo "Records fetched successfully <br/>";

$conn = null;
?>
