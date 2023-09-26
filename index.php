<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
class Administrativos {
    private $usuario;
    private $clave;

    public function __construct() {
        // Solicitar al usuario un nombre de usuario y una contraseña
        $this->solicitarCredenciales();
    }

    private function solicitarCredenciales() {
        echo "Ingrese su nombre de usuario: ";
        $this->usuario = trim(fgets(STDIN)); // Leer el usuario

        echo "Ingrese su contraseña: ";
        $this->clave = trim(fgets(STDIN)); // Leer la clave
    }

    public function verificarCredenciales($usuario, $clave) {
        // Verificar si coinciden
        return ($this->usuario === $usuario && $this->clave === $clave);
    }
}

//  instancia de la clase 
$admin = new Administrativos();
      
        class Clientes {
    public $usuario;
    public $nombreCompleto;
    public $clave;
    public $fechaAfliacion;
    public $preferencia;

    public function __construct($usuario, $nombreCompleto, $clave, $fechaNacimiento, $preferencia) {
        $this->usuario = $usuario;
        $this->nombreCompleto = $nombreCompleto;
        $this->clave = $clave;
        $this->fechaAfliacion = $fechaNacimiento;
        $this->preferencia = $preferencia;
    }

    public function mostrarInformacion() {
        echo "Información del cliente:\n";
        echo "Usuario: " . $this->usuario . "\n";
        echo "Nombre Completo: " . $this->nombreCompleto . "\n";
        echo "Fecha de Nacimiento: " . $this->fechaAfliacion . "\n";
        echo "Preferencia: " . $this->preferencia . "\n";
    }
}

// Crear una instancia
$cliente = new Clientes($usuario,$nombreCompleto , $clave, $fechaAfliacion, $preferencia);

// Mostrar la información del cliente
$cliente->mostrarInformacion();

        
   class PeriodismoEcologico {
    public $p1;
    public $p2;
    public $p3;
    public $p4;

    public function __construct($p1, $p2, $p3, $p4) {
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->p3 = $p3;
        $this->p4 = $p4;
    }

    public function mostrarRespuestas() {
        echo "Respuestas sobre Periodismo Ecológico:\n";
        echo "1. ¿Con qué frecuencia consumes contenido relacionado con el periodismo ecológico? " . $this->p1 . "\n";
        echo "2. ¿Qué tipo de contenido relacionado con la ecología prefieres consumir? " . implode(", ", $this->p2) . "\n";
        echo "3. ¿Qué temas medioambientales te interesan más? " . implode(", ", $this->p3) . "\n";
        echo "4. ¿Consideras que el periodismo ecológico influye en tus decisiones cotidianas relacionadas con el medio ambiente? " . $this->p4 . "\n";
    }
}

// Crear una instancia de la clase PeriodismoEcologico con las respuestas del usuario
$respuestasCliente = new PeriodismoEcologico($p1, [$p2], [$p3], $p4);

// Mostrar las respuestas del usuario
$respuestasCliente->mostrarRespuestas();

        
    class Tours{
    public $p1;
    public $p2;
    public $p3;
    public $p4;

    public function __construct($p1, $p2, $p3, $p4) {
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->p3 = $p3;
        $this->p4 = $p4;
    }

    public function mostrarRespuestas() {
        echo "Respuestas sobre Tours:\n";
        echo "1. ¿Con qué frecuencia sale de tour? " . $this->p1 . "\n";
        echo "2. ¿Donde prefiere ir de tour? " . implode(", ", $this->p2) . "\n";
        echo "3. ¿Prefiere tours gastronomicos o turisticos? " . implode(", ", $this->p3) . "\n";
        echo "4. ¿Consideras que los tours son beneficionos para la salud mental? " . $this->p4 . "\n";
    }       
        }//tours
        
        // Crear una instancia de la clase PeriodismoEcologico con las respuestas del usuario
$respuestasClientet = new Tours($p1, [$p2], [$p3], $p4);

// Mostrar las respuestas del usuario
$respuestasClienteT->mostrarRespuestas();
        
        ?>
    </body>
</html>
