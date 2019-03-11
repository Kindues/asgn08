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
    <?php foreach ($task as $heading => $value) : ?>
    
    <li>
      <strong><?= ucwords($heading); ?></strong> : <?= $value; ?>
    </li>
    
    <?php endforeach; ?>  
  </ul>
  
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
      <strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>
  
  </ul>
  
  <h2>Episode 8</h2>
  <p>Learning how to work with booleans.</p>
  
  
  
  <a href="../index.php">Home Page</a>
</body>
</html>
