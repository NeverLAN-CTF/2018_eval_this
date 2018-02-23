<?php
if(array_key_exists('username', $_GET)){
	$arr['flag'] = "flag{D0nT_3v4l_1nput}";
	$str = '$output='.$_GET["username"].';';
	eval($str);
}	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>The escape of the string</title>
	</head>
	<body>
		<div>
			<p><?php echo($output ? 'You entered: '.$output:''); ?></p>
			<form action="?" method="GET">
				<label for="username">Username</label>
				<input name="username" type="text"/>
				<label for="password">Password</label>
				<input name="password" type="password"/>
				<input type="submit" />
			</form>
		</div>
		<pre>
&lt;?php
    if(array_key_exists('username', $_GET)){
	    $arr['flag'] = "flag is here";
	    $str = '$output='.$_GET["username"].';';
	    eval($str);
    }
?&gt;

		</pre>
	</body>
</head>
