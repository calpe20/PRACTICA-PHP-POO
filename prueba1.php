<?
	/*Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
	Definir un método inicializar que lleguen como dato el nombre y sueldo. 
	Plantear un segundo método que imprima el nombre y un mensaje si debe o 
	no pagar impuestos (si el sueldo supera a 3000 paga impuestos)
	*/
	class Empleado{
		public $nombre;
		public $sueldo;
		function getEmpleado($nom,$sue){
			$this->nombre = $nom;
			$this->sueldo = $sue;
		}
		function setEmpleado(){
			print $this->nombre;
			if ($this->sueldo>=3000){
				print ' paga impuesto';
			}else{
				print ' no Paga impuesto';
			}
		}
	}
	$obj = new Empleado();
	$obj->getEmpleado('Angel',3000);
	$obj->setEmpleado();
?>