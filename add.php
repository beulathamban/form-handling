<?php
//include ("adding.php");

$d=date("d/m/y");
echo "$d";
$n=$_POST["text1"];


?> 
<body>
	<h1> Yoobee's calculator </h1>
	<!-- when allowing files to be uploaded, include enctype attribute in the form tag -->
	<form action="adding.php" method="post" enctype="multipart/form-data" id="option">
	Circle <input type="radio" name="circle" value="circle" checked="checked">
	Square <input type="radio" name="circle" value="square">
	<input type="submit" name="submit" value="proceed"> 
	</form>	
	<hr>
<form action="" method="post" id="circle">
 Enter the radius : <input type="text" name="text1" value="<?php echo $n;?>">
 <!-- receiving user data in the form and using it to display a calculated value in the same form -->
Diameter : <input type="text" name="dia" value="<?php echo 2*$_POST[text1]; ?>" >
<input type="submit" name="submit" value="display"> 
<!-- File uploading using form . PHP engine creates a $_FILES superglobal variable to receive files-->
<input type="file" name="photo" id="photo" value="" />
</form>
</body>
 