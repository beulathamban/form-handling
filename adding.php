<?php
$n=$_POST["text1"];
$m=$_POST["text2"];
$sum=$n+$m;
move_uploaded_file($_FILES["photo"]["tmp_name"], "/home/092834/Pictures/usa.png");
echo "$_FILES[“photo”][“name”]";

//die displays the message and exit 
//php.ini file can be used to restrict the file size 
// if ( $_FILES[“photo”][“size”] > 10000 ) die( “File too big!” );
/*if ( move_uploaded_file( $_FILES[“photo”][“tmp_name”], “/home/matt/photos/
photo.jpg” ) ) {
echo “Your file was successfully uploaded.”;
} else {
echo “There was a problem uploading your file - please try again.”;
}*/
//redirecting after submission of form to prevent reloading or refreshing that causes a resubmission of the form data - use header("thank.html")
?>