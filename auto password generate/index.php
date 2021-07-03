<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Auto password generate</title>
</head>
<body>

<?php 

$str="ajisjd3345455@#$%0254";

$strs=str_shuffle($str);

$strs=substr($strs,0,8);

?>

<input type="text" value="<?php echo $strs; ?>">
<input id="btntest" type="button" value="generate Your password" 
       onclick="window.location.href = 'index.php'" />
	

</body>
</html>
