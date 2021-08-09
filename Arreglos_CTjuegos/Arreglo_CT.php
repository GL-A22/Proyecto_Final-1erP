<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="esp">
    
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="recursos/icon.jpg" type="image/jpg" sizes="16x16">
        <title>Categorías de Viejuegos</title>
    </head>
    <body>
        
        <?php
        $juegos = array(
            
            "Accion" => array ("GTA", "COD", "PUGB"),
            "Aventura" => array ("ASSASINS", "CRASH", "Price of Persia"),
            "Deportes" => array ("FIFA 19", "PES 19", "MOTO GP 19")
        );
        
        $categorias = array_keys($juegos);
        ?>
        
        <header>
            <h1>Ejercicio Numero 1: Array</h1>
            
        </header>
        
        <nav>
            <div id="a">
                <a href="../index.php">Inicio |</a>
                <a href="Arreglo_CT.php">Ejercicio numero 1: Array |</a>
                <a href="../CalculadoraBasica/calculadora.php">Ejercicio Numero 2: Calculadora |</a>
                <a href="../Max_Min_sesiones/Aumentar_Disminuir.php">Ejercicio Numero 3: A/D_Sesiones</a>
           </div>
        </nav>
        
        <main>
            <h2 style="font-size: 30px">Videjuegos</h2>
            <section>
        <div>
        <table border="2">
            
            <?php require_once 'Codi_encabezado.php';?>
            <?php require_once 'Codi_PrimeraFila.php';?>
            <?php require_once 'Codi_SegundaFila.php';?>
            <?php require_once 'Codi_TerceraFila.php';?>
            
        </table>
        </div>
            </section>    
        </main>
        
        <style>
            
            
            
            body{
                height: 100%;
                max-height: 800px;
                max-width: 1400px;
                width: 95%;
                margin: 8px 20px 8px 22px;
                background-image: url("recursos/fondo15.png");
            }

            #th1{
                font-size: 25px;
                
            }
            
            th{
                font-size: 18px;
                font-variant: all-small-caps;
                
            }
            td{
                font-size: 16px;
            }
       
            nav{
                
                height: 50px;
                margin: 20px auto;
                padding: 20px 20px 20px 0;
                border: 1px solid black;
                max-width: 1400px;
                width: 100%;
                border-left: none;
                border-right: none;
                border-bottom-color:#DA7A86;
                border-top-color:#8FBDBB;
     
            }
            
            #a{
                display: inline-block;
                
                margin: 10px 10px 10px 10px;
                width: 100%; 
                color: #2D2D2D;
                font: small-caps 100%/200% serif;
                font-variant: all-small-caps;
            }
            
            a{
                margin: 0 10px 0 10px;
                font-size: 22px;
                color: #7f5a83;

            }
            
            h2{
                margin: 30px 0 30px 20px;
                font: small-caps 100%/200% serif;
                font-variant: all-small-caps;
            }
            
            header{
                margin: 20px 0 20px 20px;
                font-size: 45px;
                color: #2D2D2D;
                font: small-caps 100%/200% serif;
                font-variant: all-small-caps;
            
            }
           
            
            main{
                margin: 30px 0 30px 0;
                max-height: 800px;
                height: 100%;
            }
             
            table, section{
                width: 90%;
                margin: 10px;
                height: 300px; 
                
            }
            
            
            
            
        </style>
    </body>
</html>
