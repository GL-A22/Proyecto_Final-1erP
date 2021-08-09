<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="esp">
    
    <head>
        <meta charset="UTF-8">
        <link rel="icon"  href="Arreglos_CTjuegos/recursos/Iconprog.png" type="image/PNG" sizes="16x16">
        <title>Tareas: PV</title>
    </head>
    <body>

        <header>
            <h1>Programacion Visual: Grupo #2</h1>
            
        </header>
        
        <nav>
            <div id="a">
                <a href="index.php">Inicio |</a>
                
           </div>
        </nav>
        <main>
            <h2 style="font-size: 30px">Proyecto 1er parcial:</h2>
            <section>
        <div>
           
        
        <table border="2">
            <tr>
                <td><a href="Arreglos_CTjuegos/Arreglo_CT.php">
                        Ejercicio numero 1: Array | click: ir al sitio |
                    </a>
                </td>
                <td id="td0">
                    <p>
                        Realizar una tabla de categorías de Videjuegos,
                        la cual debe ser impresa mediante un foreach,
                        estar dividida en tres script, guardar sus elementos
                        en un array y, usar la respetiva tablas e includes.
                        
                    </p>
                </td>
                
            </tr>
            <tr>
                <td><a href="CalculadoraBasica/calculadora.php">
                        Ejercicio Numero 2: Calculadora | click: ir al sitio |
                    </a>
                </td>
                <td id="td0">
                    <p>
                        Realizar una Calculadora basica en PHP
                        la cual debe llevar los operadores basicos Suma'+',
                        resta'-', Mutiplicacion'X', Division'/'. 
                        La calculadora debe integrar y ser realizada con: 
                        2 input, 4 botones, condiciones (if & Swich).
                    </p>
                </td>
                
            </tr>
            
            <tr>
                <td>
                    
                    <a href="Max_Min_sesiones/Aumentar_Disminuir.php">
                        Ejercicio Numero 3: A/D_Sesiones | click: ir al sitio |
                    </a>
                    
                </td>
                <td id="td0">
                    <p>
                        Realizar tres script en PHP y haciendo uso de la variables
                        globales $_Session, la cual deben llevar 2 enalces 
                        con las siguientes acciones:
                        <br>
                        <br>
                        "Aumentar Sesion:"
                        <br>
                        Debe aumentar un parametro cada vez que se de click.<br>
                        "Disminuir Sesion"
                        <br>
                        <br>
                        Debe disminuir un parametro cada vez que se de click.
                        <br>
                        Estos enlaces deben contar con la siguiente caracteristica
                        <br>
                        <br>
                        1.- El parametro debe enviarse por GET para el aumentar 
                        y disminuir dicho parametro.

                    </p>
                </td>
                
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
                background-image: url("CalculadoraBasica/recursos/fondo15.png");
            }
         
            
            td{
                font-size: 18px;
                height: 20%;
                font-variant: all-small-caps;
            }
            
            #td0{
                width: 50%; 
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
                color: #006064;
                text-decoration: none;

            }
            
            #AD{
                color: #393E41;
            }
            
            
            #cero{
                font-size: 60px;
            }
            
            h2{
                margin: 10px 0 10px 20px;
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
                margin: 10px 0 30px 0;
                
                
            }
            table, section{
                width: 95%;
                margin: 10px;
                height: 300px; 
                margin-bottom: 20px;
            }
            
            
        </style>
    </body>
</html>

