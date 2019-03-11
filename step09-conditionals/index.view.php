<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asgn08</title>
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  
  <h1>Task for the day</h1>
  
  
  <ul>
    <li>
      <strong>Name:</strong> <?= $task['title']; ?>
    </li>

    <li>
      <strong>Due Date:</strong> <?= $task['due']; ?>
    </li>  
    
    <li>
      <strong>Person Responsible</strong> <?= $task['assigned_to']; ?>
    </li>  
    
    <li>
      <strong>Status:</strong>
      
      <?php if ($task['completed']) : ?>
        <span class="icon">&#9989;</span>
      <?php endif; ?>
    </li>
  </ul>
  
  <ul>
    <li>
      <strong>Race:</strong> <?= $character['Race']; ?>
    </li>

    <li>
      <strong>Age:</strong> <?= $character['Age']; ?>
    </li>  
    
    <li>
      <strong>Role:</strong> <?= $character['Role']; ?>
    </li>
    
    <li>
      <strong>Hit Points:</strong> <?= $character['Hit Points']; ?>
    </li> 
    
    <li>
      <strong>Village:</strong> <?= $character['Village']; ?>
    </li>  
    
    <li>
      <strong>Magic:</strong>
      
      <?php if ($character['Magic']) : ?>
        <span>&#9728;</span>
      <?php endif; ?>
    </li>
  </ul>
  
  
  
  <h2>Episode 9</h2>
  <p>Learning how to work with conditionals.</p>
  
  
  
  <a href="../index.php">Home Page</a>
</body>
</html>
