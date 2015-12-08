<html>
<head>
	<title>fowise</title>
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
 <script language="javascript" type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="filter-controls">
		<div class="home"><a href="http://www.fow.cowise.info"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></div>
					<div class="register"><a href="http://www.fow.cowise.info/adduser.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div>

	<form action="results.php" method="post">
	  <select name="card-type">
	  	<option value="default" selected>Card Type</option>
	    <option value="Ruler">Ruler</option>
	    <option value="J-Ruler">J-Ruler</option>
	    <option value="Resonator">Resonator</option>
	    <option value="Spell:Chant-Instant">Spell:Chant-Instant</option>
	    <option value="Spell:Chant">Spell:Chant</option>
	    <option value="Addition:Field">Addition:Field</option>
	    <option value="Addition:Resonator">Addition:Resonator</option>
	    <option value="Regalia">Regalia</option>
	  </select>
	  <select name="rarity">
	  	<option value="default" selected>Rarity</option>
	    <option value="C">Common</option>
	    <option value="U">Uncommon</option>
	    <option value="R">Rare</option>
	    <option value="SR">Super Rare</option>
	    <option value="P">Promo</option>
	  </select>
	  <select name="color">
	  	<option value="default" selected>Color</option>
	    <option value="Light">Light</option>
	    <option value="Fire">Fire</option>
	    <option value="Water">Water</option>
	    <option value="Wind">Wind</option>
	    <option value="Night">Night</option>
	    <option value="Uncolored">Uncolored</option>
	  </select>
	  <input class="btn btn-success" name="search" type="submit" value="Find My Cards!">
	</form>
	<div class="float-right">hey, thanks for beta testing. create an account and one day you can login.</div>
</div>
<h1 class="heading">Card Details</h1>
<div class="row">
	<div class="col-md-6">
		<?php
			$username="cowisein_fow";$password="Park120!";$database="cowisein_fow";
			mysql_connect("localhost",$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");

			$card_number = $_GET['card_number'];  // Storing Selected Value In Variable

			$query="SELECT * FROM Cards_Import WHERE(Card_ID='$card_number')";
			$result=mysql_query($query);
			if($result)
			{
				while ($row=mysql_fetch_array($result)){
				echo "<div><img src='".$row['Image']."'/></div>";
			}
			}else{
			die(mysql_error());
			}
		?>
	</div>
	<div class="col-md-6">
		<table class="table table-striped table-hover">
		<?php
		$username="cowisein_fow";$password="Park120!";$database="cowisein_fow";
		mysql_connect("localhost",$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");

		$card_number = $_GET['card_number'];  // Storing Selected Value In Variable

		$query="SELECT * FROM Cards_Import WHERE(Card_ID='$card_number')";


		$result=mysql_query($query);
		if($result)
		{
		while ($row=mysql_fetch_array($result)){
		echo "<tr class='body'>";
		echo "<td>Name</td>";
		echo "<td>".$row['Name']."</td>";
		echo "</tr>";
		echo "<td>Type</td>"; 
		echo "<td>".$row['Type']."</td>";
		echo "</tr>";
		echo "<td>Set</td>";  
		echo "<td>".$row['Set']."</td>";
		echo "</tr>";
		echo "<td>Attribute</td>"; 
		echo "<td>".$row['Attribute']."</td>";
		echo "</tr>";
		echo "<td>Total Cost</td>"; 
		echo "<td>".$row['TotalCost']."</td>";
		echo "</tr>";
		echo "<td>Rarity</td>"; 
		echo "<td>".$row['Rarity']."</td>";
		echo "</tr>";
		echo "<td>Card Number</td>"; 
		echo "<td>".$row['CardNumber']."</td>";
		echo "</tr>";
		echo "<td>Race</td>"; 
		echo "<td>".$row['Race']."</td>";
		echo "</tr>";
		echo "<td>Details</td>"; 
		echo "<td>".$row['Details']."</td>";
		echo "</tr>";
		echo "<td>Attack</td>";
		echo "<td>".$row['Attack']."</td>";
		echo "</tr>";
		echo "<td>Defense</td>"; 
		echo "<td>".$row['Defense']."</td>";
		echo "</tr>"; 
		}
		}else{
		die(mysql_error());
		}
		?>
		</table>
	</div>
</div>
</body>
</html>