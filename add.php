<?php
//include ("adding.php");

$d=date("d/m/y");
echo "$d";
$n=$_POST["text1"];


?> 
<body>
	<h1> Yoobee's calculator </h1>
	<form action="" method="post id="option">
	Circle <input type="radio" name="circle" value="circle" checked="checked">
	Square <input type="radio" name="circle" value="square">
	<input type="submit" name="submit" value="proceed"> 
	</form>	
	<hr>
<form action="" method="post" id="circle">
 Enter the radius : <input type="text" name="text1" value="<?php echo $n;?>">
Diameter : <input type="text" name="dia" value="<?php echo 2*$_POST[text1]; ?>" >
<input type="submit" name="submit" value="display"> 
<!-- <input type = "text" name = "text3" value="<?php echo $sum; ?>" > -->
</form>
</body>
 