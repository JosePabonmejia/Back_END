<?php 
//Podemos utilizar el metodo isset y el metodo empty
//
if (isset ($_POST["name"]) && !empty($_POST["name"]))
{
    echo "Hola ".$_POST['name']."!";
}
else {
    echo "No mandaste nada";
}
///////
if (isset($_POST["form"])) {
    echo "Todo el formulario se mando";
}
else{
    echo "No se mando ningun formulario";
}
?>