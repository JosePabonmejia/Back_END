<?php 
    class taxy {
        public $matricula;

        public function __construct($matricula) {
            $this->matricula = $matricula;
        }
        public function viajar($inicio,$destino){
            return "El viaje comienza en $inicio rumbo a $destino";
        }

    }
    class persona {
        public $nombre;

        public function __construct($nombre) {
            $this->nombre = $nombre;
        }
    }
    

?>