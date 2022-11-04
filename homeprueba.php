<?php
include "Conexion.php";
include "selects.php";
?>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="styleshee">
    <link rel="stylesheet" href="styles1.css" />
  
    <title>Navigation bar</title>
    <meta charset="utf-8">
	<meta name="author" content="anonymous">
	<meta name="generator" content="Sublime text3">
	<meta name="robot" content="index, follow">
	<meta http-equiv="refresh" content="">
	<meta name="description" content="This is navigation bar on html page">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keyowrds" content="html, navigation bar, navigation, bar, javascript, content">
   
</head>
<body>


    

<?php
        
           
            while($mostrar=mysqli_fetch_array($result)){
            ?>
<div class="blog-card">

    <div class="meta">
      <div class="photo" style="background-image: url(<?php echo $mostrar['portada'] ?>)"></div>
      <ul class="details">
        <li class="author"><a href="#">John Doe</a></li>
        <li class="date">Aug. 24, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1><?php echo $mostrar['nombre'] ?></h1>
      
      <p> <?php echo $mostrar['reseña'] ?></p>
      <p class="read-more">
      <button class="button-add" >Agregar</button>
      </p>
    </div>
   
  </div>
  <?php
            
        }
        
        ?>


  </body>