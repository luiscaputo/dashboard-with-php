<?php
	// session_start();
	$server 	= 	'localhost'	;
	$userName 	= 	'root'		;
	$password 	= 	''			;
	$db_name 	= 	'casadeapostas'	;
    
    try {
        $pdo = new PDO("mysql:dbname=".$db_name."; host=".$server, $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        global $pdo;
    } 
    catch (PDOException $e) 
    {
       echo "Erro de Connexao: ". $e->getMessage();
       exit;
    }
 ?> 