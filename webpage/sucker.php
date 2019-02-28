<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php
		if(!empty($_POST["name"])&&!empty($_POST["section"])&&!empty($_POST["card_number"])&&!empty($_POST["card"])){
		?>
		<h1>Thanks, sucker!</h1>
		<p>
			Your information has been recorded.
		</p>
		
		<dl>
			<dt>Name</dt>
			<dd>
				<?=$_POST["name"]?>
			</dd>
			
			<dt>Section</dt>
			<dd>
				<?=$_POST["section"]?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				<?=$_POST["card_number"]?> (<?=$_POST["card"]?>)
			</dd>
		</dl>
	</form>
	<?php
	$data=$_POST["name"].";".$_POST["section"].";".$_POST["card_number"].";".$_POST["card"]."\n";
	file_put_contents("suckers.txt", $data,FILE_APPEND);
	?>
	<p>Here are all the suckers whoe submitted here:</p>
	<pre><?=file_get_contents('suckers.txt');?>
	</pre>
	<?php
	}else{
	?>
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely.<a href="buyagrade.html">Try again?</a>
	<?php
	}
	?>
	</body>
</html>