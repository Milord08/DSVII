class Miclase{
    const constante = 'valor constante';
    funtion mostarConstante(){
        echo slef::constante."\n";
    }
}

abstract class ClaseAbstracta{
    // se fuerza la herencia de la clase para definir este metodo
    abstract protected function tomarValor();
    abstract protected funtion prefixValor($prefix);
    //metodo comun
    public funtion printOut(){
        print $this -> tomarValor()."<br>";
    }
}
class ClaseConcreta1 extends ClaseAbstracta{
    protected funtion tomarValor(){
        return "ClaseConcreta1";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcreta1";
    }
}

class ClaseConcreta2 extends ClaseAbstracta{
    protected funtion tomarValor(){
        return "{$prefix} ClaseConcreta2";
    }
}

interface iTemplate {
    public funtion ponerVariable($nombre, $var);
    public funtion verHtml($template);
}

class Template implements iTemplate{
    private $vars = array();
    public funtion ponerVaruiable($nombre,$var){
        $this -> vars[$nombre]= $var;
    }
    public function verHtml($template){
        foreach ($this->vars as $nombre => $value){
            $template = str_replace ('{'.$nombre.'}', $value, $template);
        }
        return $template;
    }
}

class SubObject{
    static $instances = 0;
    public $instance;

    public funtion_construct(){
        $this -> instance = ++self ::$instance;
    }

    public function_clone(){
        $this->instance = ++self::@instances;
    }
}

class MyCloneable{
    public $object1;
    public $object2;

    function __clone(){
        //Forzar una copia de this -> object 
        $this -> object1 = clone $this -> object1;
    }
}

class Cilindro{
    protected $pi;
    protected $diametro;
    protected $altura;
    protected $radio;

function __construct($d,$a){
    $this->diametro = $d;
    $this->altura = $a;
    $this->pi = 3.141593;
    $this->radio = $d/2;
}
function obtener_radio(){
    return $radio;
}
function calc_volumen(){
    return $this->pi*$this->radio*$this->altura;
}
function calc_area(){
    return 2*$this->pi*$this->radio*($this->radio+$this->altura);
}
}
