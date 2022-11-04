<?php
            $select_todo="SELECT * from libros ";
            $result=mysqli_query($conn,$select_todo);
            
            ?>

<?php
            $select_especifico="SELECT * FROM libros where nombre='En las redes del Amor'";
            $result1=mysqli_query($conn,$select_especifico);
            
            ?>