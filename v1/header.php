<?php
  include_once 'global.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Customize the caption text */
      .carousel-caption h5 {
        color: black; /* White font color */
        font-size: 2rem; /* Increase font size */
        font-weight: bold; /* Make it bold */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Add a shadow for readability */
      }

      .carousel-caption p {
        color: purple; /* Yellow font color */
        font-size: 1.2rem; /* Medium font size */
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Add a subtle shadow */
      }
    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <?php include_once 'navbar.php' ?>
      </header>
      <div id="contents" class="container mt-5">
        <div class="row justify-content-center">
