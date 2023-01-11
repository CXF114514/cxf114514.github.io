<!DOCTYPE html>
<html>
<head>


<?php
if($_POST["search"]==="game")
{    
	$url="game";
}    
elseif($_POST["search"]==="testpage")
{    
	$url="test";
}
else
{
	$url="index.html";
}
?>
<meta http-equiv="refresh" content="1;url=<?php echo $url;?>"/>
</head>
<body>
	<h1>正在加载……</h1>
</body>
</html>
