<?php
print_r($_REQUEST);//
$palabras=array("sol","luna","cielo");

    if ($_REQUEST["palabra"]== $palabras[0])
    {
        echo "La palabra ingresada es correcta \n";
    }
    else
    {
        echo "La palabra ingresada es incorrecta, la palabra correcta es: ".$palabras[0]."\n";
    }
    if ($_REQUEST["palabra1"]== $palabras[1])
    {
        echo "La palabra ingresada es correcta\n";
    }
    else
    {
        echo "La palabra ingresada es incorrecta, la palabra correcta es: ".$palabras[1]."\n";
    }
    if ($_REQUEST["palabra2"]== $palabras[2])
    {
        echo "La palabra ingresada es correcta\n";
    }
    else
    {
        echo "La palabra ingresada es incorrecta, la palabra correcta es: ".$palabras[2]."\n";
    }
?>