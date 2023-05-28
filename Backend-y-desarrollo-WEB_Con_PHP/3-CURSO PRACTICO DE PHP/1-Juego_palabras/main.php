<?php

$palabras=array("sol","luna","cielo");
$palabrasDesordenadas=array();

for ($i=0; $i <count($palabras) ; $i++) { 
    $palabrasDesordenadas[$i]=str_shuffle($palabras[$i]);//Nos permite desordenar las palabras 


}
$button= "<button type='submit'>Enviar</button>";
print_r($palabrasDesordenadas);//muestra arrays
$formCierre= "</form>";
echo "
<body>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 29%, rgba(7,53,150,1) 59%, rgba(0,212,255,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
        }
       
        .form{
            background-color: aqua;
            height: 150px;
            width: 300px;
            border-radius: 20px;
            overflow: hidden;
        
        }
        
        .title {
            background-color: black;
            color: white;
            text-align: center;
        }
        

    </style>

    <main class='main'>
        <h1 class='title'>Juego de completar la palabra</h1>
        <form action='analisis.php' class='form'>
            
                <div class='hola'>
                    <br>
                    <label for='palabra'>Palabra: <input type='text' name='palabra' id='palabra'></label><br><br>
                    <label for='palabra'>Palabra: <input type='text' name='palabra1' id='palabra1'></label><br><br>
                    <label for='palabra'>Palabra: <input type='text' name='palabra2' id='palabra2'></label><br>
                    <button type='submit'>Enviar</button>
                </div>
                    
        </form>
    </main>
    

</body>

";
?>

