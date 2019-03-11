<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asgn08</title>
  <link href="../css/style.css" rel="stylesheet">
<style>
  ul {
    background-color: #fff;
    max-width: 80px;
  }
</style>
</head>

<body>
  
  <header>
    
    <ul>
      
      <?php
        foreach ($names as $name) : ?>
          <li><?= $name; ?></li>
        
      <?php endforeach; ?>
      <br>
      
      
      <?php
      //  foreach ($names as $name) {
      //    echo "<li>$name</li>";
      //  }
      ?>
    </ul>
  </header>
  <h2>Episode 6</h2>
  <p>Learning how to do arrays and how to use short hand for the arrays.</p>
  
  
  
  <a href="../index.php">Home Page</a>
</body>
</html>
