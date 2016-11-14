<?php
	//Incluir archivos de cualquier S.O
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", realpath(dirname(__FILE__)).DS);
	define("APP_PATH", ROOT."aplication".DS);

	/*echo DS;
	echo "<br>";
	echo ROOT;
	echo "<br>";
	echo APP_PATH;*/

	require_once(APP_PATH."config.php");
	require_once(APP_PATH."autoload.php");
	require_once(APP_PATH."database.php");
	require_once(APP_PATH."request.php");

	require_once(APP_PATH."bootstrap.php");
	require_once(APP_PATH."controller.php");
	require_once(APP_PATH."model.php");
	require_once(APP_PATH."Helper.php");
	require_once(APP_PATH."view.php");

	try {
		Bootstrap::run(new Request);
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	//Forma para incluir archivos
/*	echo "<pre>";
	print_r(get_required_files());*/
	/*$r = new request();
	echo $r->getController();
	echo "<br>";
	echo $r->getMethod();
	echo "<br>";
	print_r($r->getArgs());

	exit;*/
/*
	$path = ROOT."controllers".DS.$controller."controller.php";
	$view= ROOT."views".DS.$controller.DS.$action.".php";
	//echo $view;
	//exit();
	$header = ROOT."views".DS."layouts".DS."default".DS."header.phtml";
	$footer = ROOT."views".DS."layouts".DS."default".DS."footer.phtml";


	if (file_exists($path)) {
		require_once($path);
		$ob = new $controller();
		$ob->$action($args);

		if (file_exists($view)) {
			require_once($header);
			require_once($view);
			require_once($footer);
		}else{
			echo "La vista para la acción $action no existe";
		}

	}else{
		echo "El controlador controler no existe";
	}*/
?>
