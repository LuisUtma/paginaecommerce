<?php
include "Conexion.php";

?>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="styleshee">
    <link rel="stylesheet" href="styles.css" />
   
</head>

<body>
        <div class="page-nav">
            <h1>Mi tienda</h1>
            <button id="checkout" class="button-checkout" onclick="pay()">Pagar</button>
        </div>

    <div class="page-content">

            <?php
            $sql="SELECT * from libros";
            $result=mysqli_query($conn,$sql);
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <div  class="product-container">
                <h3><?php echo $mostrar['nombre'] ?></h3>
                <img class="foto" src="<?php echo $mostrar['portada'] ?>"/>
                        <p></p><h1 aling="left"><?php echo $mostrar['reseña'] ?></h1>  </p>
                <button class="button-add" >Agregar</button>                  
                    
                </div>
                <?php
            
        }
        
        ?>
        </div>
        
        
        


    </body>
