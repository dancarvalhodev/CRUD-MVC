<?php

	require('vendor'.DIRECTORY_SEPARATOR.'autoload.php');
	require('config.php');

	if(!isset($_GET['route']) || empty($_GET['route'])){
		$rota = 'home/index';
		//echo $rota;
	}
	else{
		$rota = $_GET['route'];
		//echo $rota;
	}

	$rota = explode('/', $rota);
	//print_r($rota);

	if(!isset($rota[1])){
		$rota[1] = 'index';
	}
	//print_r($rota);

	$rota[0] = 'controller\\'.$rota[0];
	//print_r($rota);

	$obj = new $rota[0]();
	//print_r($obj);

	if(method_exists($obj, $rota[1])){
		//echo $rota[1];
		//echo "EXISTE";
		if(isset($rota[2]) && !empty($rota[2])){
			
			$params = array();
			foreach ($rota as $key => $value) {
				if($key < 2) continue;
				$params[] = $value;
			}
		call_user_func_array(array($obj,$rota[1]),$params);
		}else{
			$obj->{$rota[1]}();
		}
}else{
	die("Metodo nao existe");
}
	