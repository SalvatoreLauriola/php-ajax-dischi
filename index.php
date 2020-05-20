<?php
    include __DIR__ . "/partials/database.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/scss/main.scss">
</head>
<body>
    


<ul>
<?php foreach($album as $data) {?>

    <li><img src="<?php echo $data['poster']?>" alt="image"> </li>
    <li> <?php echo $data['title']?> </li>
    <li> <?php echo $data['author']?> </li>
    <li> <?php echo $data['year']?> </li>
<?php } ?>
</ul>









    <script src="dist/js/main.js"></script>
</body>
</html>