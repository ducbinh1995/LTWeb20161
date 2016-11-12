<html>
<head>
	<title> Ex1 </title>
</head>
<body>
	<p> Chon che do:
	<p> 1. Degree -> Radian.
	<p> 2. Radian -> Degree.
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<p>Che do:<input type="text" name="i">
	<p>Du lieu vao:<input type="text" name="n">
	<p><input type="submit" value="Convert">
	<p><input type="reset" value="Reset">
	</form>
	<?php
		$n=$_POST["n"];
		print "Input: $n<br>";
		$i=$_POST["i"];
		function convert($n, $i) {
			if($i==1)
				return $n*M_PI/180;
			if($i==2)
				return $n*180/M_PI;
		}
		if ((array_key_exists("i", $_POST)) && (array_key_exists("n", $_POST))) {
			if(($i==1)||($i==2)) {
				$abc=convert($n, $i);
				print "Output: $abc<br>";
			}
			else
				print "LOI: Chi chon che do 1 hoac 2!<br>";
		}
	?>
</body>
</html> 