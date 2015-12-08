<?php
?>
<html>
<head>
	<title>fowise</title>
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
 <script language="javascript" type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php

        /*** connect to database ***/
        /*** mysql hostname ***/
        $mysql_hostname = 'localhost';

        /*** mysql username ***/
        $mysql_username = 'cowisein_fow';

        /*** mysql password ***/
        $mysql_password = 'Park120!';

        /*** database name ***/
        $mysql_dbname = 'cowisein_fow';

mysql_connect("localhost",$mysql_username,$mysql_password);
@mysql_select_db($mysql_dbname) or die( "Unable to select database");
$query="SELECT * FROM Cards_Import";$result=mysql_query($query);
$num=mysql_numrows($result);mysql_close();


        /*** connect to database ***/
        /*** mysql hostname ***/
        $mysql_hostname = 'localhost';

        /*** mysql username ***/
        $mysql_username = 'cowisein_fow';

        /*** mysql password ***/
        $mysql_password = 'Park120!';

        /*** database name ***/
        $mysql_dbname = 'cowisein_fow';


        /*** select the users name from the database ***/
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/
        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("SELECT username FROM Players 
        WHERE user_id = :user_id");

        /*** bind the parameters ***/
        $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $phpro_username = $stmt->fetchColumn();

        /*** if we have no something is wrong ***/
        if($phpro_username == false)
        {
            $message = 'Access Error';
        }
        else
        {
            $message = $username;
        }

?>
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
	  <select name="deck">
	  	<option value="deck" selected>Deck</option>
	  </select>
	  <input class="btn btn-success" name="search" type="submit" value="Find My Cards!">
	</form>
	<div class="float-right">hey, thanks for beta testing. create an account and one day you can login.</div>
</div>
<h1 class="heading">All Cards</h1>
<table class="table table-striped table-hover">
<tr class="header">
	<td>Name</td>
	<td>Type</td>
	<td>Set</td>
	<td>Attribute</td>
	<td>Cost</td>
	<td>Rarity</td>
	<td>Card Number</td>
	<td>Race</td>
	<td>Description</td>
	<td>Attack</td>
	<td>Defense</td>
	<td>Image</td>
</tr>
<?php
$i=0;while ($i < $num) {$f1=mysql_result($result,$i,"Name");
$f2=mysql_result($result,$i,"Type");$f3=mysql_result($result,$i,"cardSet");
$f4=mysql_result($result,$i,"Attribute");$f5=mysql_result($result,$i,"TotalCost");
$f6=mysql_result($result,$i,"Rarity");$f7=mysql_result($result,$i,"CardNumber");$f8=mysql_result($result,$i,"Race");
$f9=mysql_result($result,$i,"Details");$f10=mysql_result($result,$i,"Attack");$f11=mysql_result($result,$i,"Defense");$f12=mysql_result($result,$i,"Image");
$f13=mysql_result($result,$i,"Card_ID");
?>
<tr class="body">
<td>
<a href="card-details.php?card_number=<?php echo $f13; ?>"><?php echo $f1; ?></a>
</td>
<td>
<?php echo $f2; ?>
</td>
<td>
<?php echo $f3; ?>
</td>
<td>
<?php echo $f4; ?>
</td>
<td>
<?php echo $f5; ?>
</td>
<td>
<?php echo $f6; ?>
</td>
<td>
<?php echo $f7; ?>
</td>
<td>
<?php echo $f8; ?>
</td>
<td>
<?php echo $f9; ?>
</td>
<td>
<?php echo $f10; ?>
</td>
<td>
<?php echo $f11; ?>
</td>
<td>
<a href="<?php echo $f12; ?>" alt="<?php echo $f1; ?>"><img class="card-picture" src="<?php echo $f12; ?>"/></a>
</td>
</tr>
<?php
$i++;}
?>
</body>
</html>