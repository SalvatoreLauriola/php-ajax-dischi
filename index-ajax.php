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
        <a href="index.php"></a>
    </div>
</header>
    

<main class="music">
    <div class="container">
        <div class="wrapper">
        
            
        </div>
        
        
    
    </div>
</main>

<script id="entry-template" type="text/x-handlebars-template">
    <div class="fixing_ul">
        <ul>
        <li><img src="{{poster}}"> </li>
        <li> <h3>{{title}}</h3>  </li>
        <li> <h4>{{author}}</h4> </li>
        <li> <h6>{{year}}</h6> </li>
        </ul>
    </div>
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
<script src="dist/js/main.js"></script>
</body>
</html>