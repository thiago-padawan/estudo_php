<!DOCTYPE html>
<html>
<head>
	<title>AULA_9 -ARRAYS</title>
</head>
<body>
	<pre>
		<?php 
			$x = array(1,2,78,6,4);
			$x[] = 'novo';

			print_r($x);

		 	$y = range(6,25,2);

		 	print_r($y);

		 	foreach ($y as $v) {
		 		echo "<h2>$v</h2>";
		 	}

		 	$z = array('show' => 1,'xatuba' => 2,'keísso' => 2 );
		 	$z[]=3;
		 	echo print_r($z);
		 	echo "<h1>".$z['show']."</h1>";

		 	foreach ($z as $key => $v) {
		 		echo "<h2>A chave de $key possui o valor$v</h2>";
		 	}

		 	$matriz = array("vetor1"=>array(1,2),
               			    "vetor2"=>array(4,5),
                            "vetor3"=>array(6,7));
		 	print_r($matriz);
		 ?>
	</pre>
</body>
</html>