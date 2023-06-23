<?php 
   abstract class Base {
        protected $name;
        
        private function getClassName()// Metodo que nos dira el nombre de la clase
        {   //  Metodo propio de php 
            return get_called_class();//Quiero visualizar el nombre de la clase que me esta llamando 
        }  
        public function login(){
            return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
        }
    }
    class Admin extends Base {
        public function __construct($name)
        {
            $this->name=$name;
        }
    }
    class User extends Base {
        public function __construct($name)
        {
            $this->name=$name;
        }
    }
    class Guest extends Base {
       protected $name="Invitado";
    }
    //Creamos un objeto que aga referencia al invitado
    $guest = new Guest();
    echo $guest->login();

    $admin = new Admin('Helena');
    echo $admin->login();

    $user = new User('John Moore');
    echo $user->login();
    ?>