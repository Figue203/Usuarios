<?php
            include ('ValidarUsuario.php');

            $Validere = new ValidarUsuario;

            $Nombre =$_POST['Nombre'];
            $Password =$_POST['Password'];

            $key = $Validere->ValidarBruker($Nombre, $Password);

           

         if($key )
         {
              header("location:Ventas.php");

         }
         else 
         {
              header("location:Index.html");
         }
?>