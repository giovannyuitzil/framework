<?php
/**
*
*/
class Bootstrap
{

	function __construct()
	{
		# code...
	}
//no necesita un objeta para llamar la funcion
	//function :: instancia;
	public static function run(Request $p){
		$controllerName = $p->getController()."controller";
		//Ruta del controlador
		$routeController = ROOT."controllers".DS.$controllerName.".php";
		$method = $p->getMethod();
		$args = $p->getArgs();


		if (is_readable($routeController)) {
			include_once($routeController);
			$controller = new $controllerName;

			if (is_callable(array($controller, $method))) {
				$method = $p->getMethod();
			}else{
				$method = "index";
			}
			if ($method=="login") {

			}else {
					Authorization::logged();
			}

			if (!empty($args)) {
				call_user_func_array(array($controller, $method), $args);

			}else{
				call_user_func(array($controller, $method));
			}


		}else{
			throw new Exception("Controler no encontrado");

		}

	}

}
