<?php
    include __DIR__ . "/partials/database.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/scss/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
<header>
    <div class="container_head">
        <img src="dist/img/spotify-logo.png" alt="logo">
    </div>
</header>
    

<main class="music">
    <div class="container">
        <div class="wrapper">
        <?php foreach($album as $data) {?>
            <div class="fixing_ul">
                <ul>
                <li><img src="<?php echo $data['poster']?>" alt="image"> </li>
                <li> <h3><?php echo $data['title']?></h3>  </li>
                <li> <h4><?php echo $data['author']?></h4> </li>
                <li> <h6><?php echo $data['year']?></h6> </li>
                </ul>
            </div>
        <?php } ?>
        </div>
        
        
    
    </div>
</main>


<script src="dist/js/main.js"></script>
</body>
</html>