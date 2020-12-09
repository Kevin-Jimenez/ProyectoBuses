<?php
  $conexion=new mysqli("localhost", "root", "", "trasporte");
	try{

		$base=new PDO("mysql:host=localhost; dbname=trasporte" , "root" , "");

		$base->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("set character set utf8");

	}catch(exception $e) {

        die("Error:" . $e->getmessage());
        echo "linea del error" . $e->getline();

    }
?>