                             
<html lang="esp">
    <head>
        <link rel="icon" href="recursos/IconCal.png" type="image/png" sizes="16x16">
        <title> CALCULADORA </title>        
    </head>
    
    <body background="recursos/fondo15.png">
        <header>
            <h1>Ejercicio Numero 2: Calculadora Basica</h1>
            
        </header>
        
        <nav>
            <div id="a">
                <a href="../index.php">Inicio |</a>
                <a href="../Arreglos_CTjuegos/Arreglo_CT.php">Ejercicio numero 1: Array |</a>
                <a href="calculadora.php">Ejercicio Numero 2: Calculadora |</a>
                <a href="../Max_Min_sesiones/Aumentar_Disminuir.php">Ejercicio Numero 3: A/D_Sesiones</a>
           </div>
        </nav>
        
        
        <main>
            <h1 id="h1t" align="center">
                <div id="h1t">
                    <img src="recursos/hd.png"height="=300px" width="100%"align="center"><br/>
            <table align="center"  border="2" bgcolor="" >
                
                <tr>
                    <td id="TD1">
                            <h1  align="center">
                                <?php
                                include("Operaciones.php");
                                $Numero1 = $_POST["Numero1"];
                                $Numero2 = $_POST["Numero2"];
                                
                                
                                foreach ($_POST AS $clave => $valor) {
                                    if ($valor == "+") {
                                        
                                        Operaciones::Operacion(0, $Numero1, $Numero2);
                                    }
                                    if ($valor == "-") {
                                        
                                        Operaciones::Operacion(1, $Numero1, $Numero2);
                                        
                                    }
                                    if ($valor == "*") {
                                        
                                        Operaciones::Operacion(2, $Numero1, $Numero2);
                                    }
                                    if ($valor == "/") {
                                        
                                        Operaciones::Operacion(3, $Numero1, $Numero2);
                                        
                                    }
                                }
                                ?>
                            </h1>
                        <a style="text-align: center" href="calculadora.php"><h4>Regresar</h4></a>
                    </td>
                </tr>
            </table>
            </div>
        </h1> 
        </main>
        <style>
            
            body{
                height: 100%;
                max-height: 800px;
                max-width: 1400px;
                width: 95%;
                margin: 8px 20px 8px 22px;
            }
            
            header{
                margin: 20px 0 20px 0;
                font-size: 45px;
                color: #2D2D2D;
                font: small-caps 100%/200% serif;
                font-variant: all-small-caps;
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
                
                margin: 10px 0 10px 10px;
                width: 100%; 
                color: #2D2D2D;
                font: small-caps 100%/200% serif;
                font-variant: all-small-caps;
            }
            
            a{
                margin: 0 10px 0 10px;
                font-size: 22px;
                color: #00838F;

            }
            
            main{
                margin: 40px 400px 0 400px;
                width: 100%;
                max-width: 500px;
                height: 400px;
                
                
                
            }
            #h1t{
                width: 100%;
                max-width: 500px;
                height: 400px;
                margin: 0 0 0 0;
                
            }
            
            table{
                height: 250px;
                width: 100%;
                max-width: 500px;
                border-color: #00838F;
                
            }
            label, input{
                font-variant: all-small-caps;
            }
            
            #button{
                
                display: inline-block;
                height: 28px;
                width: 28px;
                margin-top: 20px;
                margin-right: 6px;
                padding-bottom: 10px;
                padding-top: 4px;
                color: white;
                cursor: pointer;
                border-radius: 5px;
    
            }
            
            #TD1{
                background-image: url("data:image/svg+xml,%3Csvg width='180' height='180' viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M81.28 88H68.413l19.298 19.298L81.28 88zm2.107 0h13.226L90 107.838 83.387 88zm15.334 0h12.866l-19.298 19.298L98.72 88zm-32.927-2.207L73.586 78h32.827l.5.5 7.294 7.293L115.414 87l-24.707 24.707-.707.707L64.586 87l1.207-1.207zm2.62.207L74 80.414 79.586 86H68.414zm16 0L90 80.414 95.586 86H84.414zm16 0L106 80.414 111.586 86h-11.172zm-8-6h11.173L98 85.586 92.414 80zM82 85.586L87.586 80H76.414L82 85.586zM17.414 0L.707 16.707 0 17.414V0h17.414zM4.28 0L0 12.838V0h4.28zm10.306 0L2.288 12.298 6.388 0h8.198zM180 17.414L162.586 0H180v17.414zM165.414 0l12.298 12.298L173.612 0h-8.198zM180 12.838L175.72 0H180v12.838zM0 163h16.413l.5.5 7.294 7.293L25.414 172l-8 8H0v-17zm0 10h6.613l-2.334 7H0v-7zm14.586 7l7-7H8.72l-2.333 7h8.2zM0 165.414L5.586 171H0v-5.586zM10.414 171L16 165.414 21.586 171H10.414zm-8-6h11.172L8 170.586 2.414 165zM180 163h-16.413l-7.794 7.793-1.207 1.207 8 8H180v-17zm-14.586 17l-7-7h12.865l2.333 7h-8.2zM180 173h-6.613l2.334 7H180v-7zm-21.586-2l5.586-5.586 5.586 5.586h-11.172zM180 165.414L174.414 171H180v-5.586zm-8 5.172l5.586-5.586h-11.172l5.586 5.586zM152.933 25.653l1.414 1.414-33.94 33.942-1.416-1.416 33.943-33.94zm1.414 127.28l-1.414 1.414-33.942-33.94 1.416-1.416 33.94 33.943zm-127.28 1.414l-1.414-1.414 33.94-33.942 1.416 1.416-33.943 33.94zm-1.414-127.28l1.414-1.414 33.942 33.94-1.416 1.416-33.94-33.943zM0 85c2.21 0 4 1.79 4 4s-1.79 4-4 4v-8zm180 0c-2.21 0-4 1.79-4 4s1.79 4 4 4v-8zM94 0c0 2.21-1.79 4-4 4s-4-1.79-4-4h8zm0 180c0-2.21-1.79-4-4-4s-4 1.79-4 4h8z' fill='%232d2d2d' fill-opacity='0.19' fill-rule='evenodd'/%3E%3C/svg%3E");
            }
        </style>
        
    </body>
</html>
                               