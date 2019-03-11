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
    
    p {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  
  <header>
    
    <h1>
      
      <?= $greeting; ?>
    </h1>
  </header>
  <h2>Episode 5</h2>
  <p>Learning how to do seperation of duties along with using "require".</p>
  <p>Side note from php.net: <br>Require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.</p>
  
  
  <a href="../index.php">Home Page</a>
</body>

</html>
