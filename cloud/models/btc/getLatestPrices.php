<?php

	
	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/main/index.php');
	

	ini_set('display_errors',1);  error_reporting(E_ALL); 
	

	$resp = getPrices();


	echo(json_encode($resp));



	//prop

	function getPrices(){
<<<<<<< HEAD
<<<<<<< HEAD

=======
	
>>>>>>> 00e7a683d5d4a79678b163c4bd044ff33a20b8b3
=======

>>>>>>> 9a5704c8e44cddbcbc729f6f722c7da884edd120
			//echo($theDate);
			//echo("http://www.quandl.com/api/v1/datasets/BITCOIN/BITSTAMPUSD?auth_token=6sQU_EYPwHRMkJsReFG9");
			$info = file_get_contents("https://www.bitstamp.net/api/ticker/");
			$tInfo = json_decode($info, true);

			$price = $tInfo['last'];
			$ask = $tInfo['ask'];
			$bid = $tInfo['bid'];
			$volume = $tInfo['volume'];
<<<<<<< HEAD


<<<<<<< HEAD
			dbQuery("INSERT INTO bitstampPrices (price, bid, ask, volume) VALUES ($price, $bid, $ask, $volume)");
			
		echo("INSERT INTO bitstampPrices (price, bid, ask, volume) VALUES ($price, $bid, $ask, $volume)");

		//return true  
=======
=======
>>>>>>> 9a5704c8e44cddbcbc729f6f722c7da884edd120
		

			dbQuery("INSERT INTO BitstampPrices (price, ask, bid, volume) VALUES ($price, $ask, $bid, $volume)");
				
				echo("INSERT INTO BitstampPrices (price, ask, bid, volume) VALUES ($price, $ask, $bid, $volume)");
		
<<<<<<< HEAD
>>>>>>> 00e7a683d5d4a79678b163c4bd044ff33a20b8b3
=======
			
	
		//return true  
>>>>>>> 9a5704c8e44cddbcbc729f6f722c7da884edd120
		return $tInfo;
	}


?>