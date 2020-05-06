<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.css">
	<title>gestion nourriture</title>
	<style type="text/css">
		.boxStyle
		{
			width: 100%;
			border: 1px solid #ccc;
			background: #FFF;
			margin: 0 0 5px;
			padding: 10px;
			font-style: normal;
			font-variant-ligatures: normal;
			font-variant-caps: normal;
			font-variant-numeric: normal;
			font-weight: 400;
			font-stretch: normal;
			font-size: 12px;
			line-height: 16px;
			font-family: Roboto, Helvetica, Arial, sans-serif;

		}
		.wrapper{
			text-align: center;
		}
		body, html {
			height: 100%;
			margin: 0;
		}
		.bg {
			/* l'image utiliser*/
			background-image: url("images/.jpg");

			/*  */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body >
	<?php include_once "header.php"; ?>
	<div class="bg" >


		<div class="container">
			<form id="contact" action="addFood.php" method="post" enctype="multipart/form-data">

				<input  name="FoodName" placeholder="nourriture" type="text" tabindex="1" required autofocus>
				<input  name="FoodName" placeholder="type" type="text" tabindex="1" required autofocus>
				<input  name="FoodName" placeholder="nombres" type="text" tabindex="1" required autofocus>
				<input style="font-size: larger;background-color: #c2fbb8;font-family: cursive;font-weight: bold;"
				class="boxStyle" type="submit" name="submit" value="Ajouter de la nourriture">
				<p class="copyright"></p>

			</form>
			<div class="wrapper">
				<button class="btn btn-default" onclick="document.location.href='adminpage.php'" ><span class='glyphicon glyphicon-chevron-left'> </span>RETOUR A LA PAGE ADMIN</button>
			</div>
		</div>
	</div>
</body>
</html>

<?php
if (isset($_POST['submit'] )&& !empty($_POST['submit']))

{
	$foodName=$_POST['foodName'];
	if (!(empty($foodName) ))
	{

		$var=new AddProduct();
		$var->productAdd($conn);
	}
}
else{

}
?>

<?php
class AddProduct{
	public function productAdd($conn)
	{
		$sql="insert into food(name,type,nbr) values('',?);";

		if(($stmt=$conn->prepare($sql))) {
			$stmt->bind_param("s",$foodName);

		}else
		{
			var_dump($conn->error);
		}
		$foodName=$_POST['TheaterName'];
		$stmt->execute();
		$stmt->close();
		$_SESSION['msg']="nourriture bien ajouter";
		header ("Location: adminpage.php" );
	}
}
?>
