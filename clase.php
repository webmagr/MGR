
<?php
/**
 * @package Tarea06
 * @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0
 * @param private $_fechaNacimiento es la variable privada en la que indicamos la fecha de nacimiento
 * @param private $_direccion es la variable privada en la que indicamos la fecha de nacimiento
 * @return _fechaNacimiento nos devuelve la fecha en la que nació  
 * @return _direccion nos devuelve la dirección en la que vive
 * @author Miguel Angel  <miguel@miguelangel.com>
 * @version 2.6.3
 */
define("nombre", pedro);
class Persona
{
   /**
    *
    * @var string $_fechaNacimiento
    * @var string $_direccion
    */
  
    public $_apellido;    
    private $_fechaNacimiento;
    private $_direccion;
    /**
     * Constructor
     * @param string $_fechaNacimiento fecha de nacimiento
     * @param string $_direccion direccion
     * 
     */
    
    public function __construct()
    {
        $this->_fechaNacimiento = "26 de Abril de 1984";
        $this->_direccion = "Calle Ervedelo 66";
    }
     /**
      * Getter de la FechaNacimiento
      * @return string _fechaNacimiento devuelva a fecha de nacimiento
      * 
      */ 
    public function getFechaNacimiento()
    {
        return $this->_fechaNacimiento;
    }
    
     /**
      * Getter de la Direccion
      * @return string _direccion devuelve la direccion
      */ 
    public function getDireccion()
    {
        return $this->_direccion;
    }
 
    public function setDireccion($direccion)
    {
        $this->_direccion = $direccion;
    }
}
 
$objPersona = new Persona();
 
echo $objPersona->getFechaNacimiento() . "<br>";
echo $objPersona->getDireccion() . "<BR>";
echo $objPersona->setDireccion("Nueva Direccion Calle del Progreso") ."<BR>";
echo $objPersona->getDireccion(). "<BR>";
echo nombre;


/**
 * @param Tiene que recibir el numero a determinar si es primo o no
 * @return Devuelve True o False si es primo o no
 * @author Miguel Angel  <miguel@miguelangel.com>
 * @version 0.6.4
 */

 
function primo($num)
{
    $cont=0;
    // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            # Si se puede dividir por algun numero mas de una vez, no es primo
            if(++$cont>1)
                return false;
        }
    }
    return true;
}
/**
 * Palindromo
 * @param Hay que introducir una palabra
 * @return echo Devuelve si el palindromo o no
 * @author Miguel Angel  <miguel@miguelangel.com>
 * @version 1.0.4
 */
    if(isset($_POST['analizar']))
     {
            $cadena= $_POST['palabra'];
            $long_cadena =strlen($cadena);

            $i=1;
            $cad2='';
        while ($i<=$long_cadena)
        {
            $desc=($long_cadena)-$i;
            $cad=substr($cadena,$desc,1);
            $cad2=$cad2.$cad;
            $i++;
         }

        if ($cadena==$cad2)
        {

           echo "La Palabra Es Palindromo"."<br>";
           echo"<br>";
           echo $cadena ," = ", $cad2;

        }
        else
        {
           echo "La Palabra No Es Palindromo"."<br>";

           echo "<br>";

           echo $cadena ," != ", $cad2;
        }

    }
  
 /**
 * Mayor o menor
 * @param Hay que introducir dos numeros y nos compara si son mayores, menores o iguales
 * @return echo imprime por pantalla si es mayor, menor o igual
 * @author Miguel Angel  <miguel@miguelangel.com>
 * @version 0.7.2
 */
        $n1=intval($_GET['numero1']);
        $n2=intval($_GET['numero2']);

        if ($n1>$n2){
            echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")"."<br>";
        }
        elseif ($n1==$n2){
            echo "El primer número (".$n1.") es igual al segundo (".$n2.")"."<br>";
        }
        else{
            echo "El primer número (".$n1.") es menor que el segundo (".$n2.")"."<br>";
        }
       
?>
<?php 
/**
 * Primo
 * @param Hay que introducir un número
 * @return echo imprime por pantalla si es primo o no
 * @author Miguel Angel  <miguel@miguelangel.com>
 * @version 0.6.4
 */
        $numero=$_POST["num"]; 
        $s=0; 
        for($i=1;$i<=$numero;$i++){ 
        if($numero%$i==0){ 
        $s=$s+1; 
        } 
        } 
        if($s==2) 
            echo "el numero ES primo"."<br>"; 
        else 
            echo "el numero NO es primo"."<br>"; 
?>

<?php
/**
 * Bisiesto
 * @param Hay que introducir un número
 * @return echo imprime por pantalla si es bisiesto o no
 * @author Miguel Angel  <miguel@miguelangel.com>
 * @version 2.3.4
 */

if ((
(($_REQUEST['anyo']%100)!=0)
&&(($_REQUEST['anyo']%4)==0))
||(($_REQUEST['anyo']%400)==0))
{
  echo "El año es bibiesto"."<br>";
             }
    else
 {
   echo "El año no es bibiesto"."<br>";
} ?>
