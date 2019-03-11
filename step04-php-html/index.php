<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asgn08</title>
  <link href="../css/style.css" rel="stylesheet">
  
  <style>
    header {
      background-color: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>

<body>
  
  <header>
    <!--<h1>
      //<?php 
      
      //$name = $_GET['name'];
      
      //echo "Hello, $name";
      
      //?>
    </h1>-->
    
    <h1>
      <?= 
      
      
       "Hello, " . htmlspecialchars($_GET['name']);
      
      ?>
    </h1>
  </header>
  <h2>Episode 4</h2>
  <p>Learning about how to use /?name=#### in the address to inject code into into scripts and how to prevent it with using functions in your echo statements</p>
  
  
  <a href="../index.php">Home Page</a>
</body>

</html>
