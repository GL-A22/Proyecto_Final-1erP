<html lang="esp">
    
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="recursos/IconSc.png" type="image/png" sizes="16x16">
        <title>A/D_Sesiones</title>
    </head>
    <body>

        <header>
            <h1>Ejercicio Numero 3: A/D_Sesiones</h1>
            
        </header>
        
        <nav>
            <div id="a">
                <a href="../index.php">Inicio |</a>
                <a href="../Arreglos_CTjuegos/Arreglo_CT.php">Ejercicio numero 1: Array |</a>
                <a href="../CalculadoraBasica/calculadora.php">Ejercicio Numero 2: Calculadora |</a>
                <a href="Aumentar_Disminuir.php">Ejercicio Numero 3: A/D_Sesiones</a>
           </div>
        </nav>
        <main>
            <h2 style="font-size: 30px">Numeros de Sesiones</h2>
            <section>
        <div>
            

        
        <table border="2">
            <tr>
                <td><a id="AD" href="AumentarS.php">Aumentar Numero</a></td>
                <td id="td0" rowspan="2">
                    <?php

                    session_start();

                    if (isset($_SESSION['SesionNumero'])){

                        $_SESSION['SesionNumero']--;
                        echo "<h1 id='cero'>".$_SESSION['SesionNumero']."</h1>";
                    }
                    ?>
                </td>
                
            </tr>
            <tr>
                <td><a id="AD" href="DisminuirS.php">Disminuir Numero</a></td>
                
            </tr>
            
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
         
            
            td{
                font-size: 18px;
                font-variant: all-small-caps;
            }
            
            #td0{
                width: 40%;
                text-align: center
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
            
            #AD{
                color: #5A5050;
            }
            
            #cero{
                font-size: 60px;
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
                
                
            }
            table, section{
                width: 80%;
                margin: 10px;
                height: 300px; 
            }
            
            
        </style>
    </body>
</html>