<?php
  $zorritos = ["https://randomfox.ca/images/1.jpg", "https://randomfox.ca/images/2.jpg", "https://randomfox.ca/images/3.jpg"]

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Imágenes de zorros</h1>
  <ul>
    <?php foreach ($zorritos as $zorrito): ?>
      <li><img src="<?php echo $zorrito; ?>" alt="Zorro"></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>