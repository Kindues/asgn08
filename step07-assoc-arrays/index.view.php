<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asgn08</title>
  <link href="../css/style.css" rel="stylesheet">
<style>
  .character {
    height: 100px;
    width: 175px;
    background-image: url(glass.jpg);
    background-color: aquamarine;
    color: #fff;
    max-width: 275px;
    padding: 1em;
    margin-left: 20px;
    justify-content: center;
    font-size: 20px;
  }
</style>
</head>

<body>
  
  
    <ul>
      <?php foreach ($person as $key => $feature) : ?>
        <li><strong><?= $key; ?>: </strong><?= $feature; ?></li>
      <?php endforeach; ?>
    </ul>
  
  <ul class="character">
      <?php foreach ($character as $key => $feature) : ?>
        <li><strong><?= $key; ?>: </strong><?= $feature; ?></li>
      <?php endforeach; ?>
    </ul> 
  <h2>Episode 7</h2>
  <p>Learning how to do associative arrays.</p>
  
  
  
  <a href="../index.php">Home Page</a>
</body>
</html>
