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
	<div class="float-right">hey, thanks for beta testing. create an account and one day you can login.</div>
</div>

<h1 class="heading">

<?php
$username="cowisein_fow";$password="Park120!";$database="cowisein_fow";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT d.Name FROM Decks d WHERE d.Deck_ID=1;";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result)){
echo $row['Name'];  
}
?>

</h1>
<table class="table table-striped table-hover">
<tr class="header">
	<td>Name</td>
	<td>Quantity</td>
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
$username="cowisein_fow";$password="Park120!";$database="cowisein_fow";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT c.Card_ID,c.Name,c.Type,c.cardSet,c.Attribute,c.TotalCost,c.Rarity,c.CardNumber,c.Race,c.Details,c.Attack,c.Defense,c.Image,d.Deck_ID,d.Quantity FROM Cards c INNER JOIN Deck_Contents d on d.card_id = c.card_id WHERE d.Deck_ID=1;";

$result=mysql_query($query);
if($result)
{
while ($row=mysql_fetch_array($result)){
echo "<tr class='body'>";
echo "<td><a href='card-details.php?card_number=".$row['CardNumber']."''>".$row['Name']."</a></td>";
echo "<td>".$row['Quantity']."</td>"; 
echo "<td>".$row['Type']."</td>";  
echo "<td>".$row['cardSet']."</td>"; 
echo "<td>".$row['Attribute']."</td>"; 
echo "<td>".$row['TotalCost']."</td>"; 
echo "<td>".$row['Rarity']."</td>"; 
echo "<td>".$row['CardNumber']."</td>"; 
echo "<td>".$row['Race']."</td>"; 
echo "<td>".$row['Details']."</td>";
echo "<td>".$row['Attack']."</td>"; 
echo "<td>".$row['Defense']."</td>"; 
echo "<td><a href='".$row['Image']."'><img class='card-picture' src='".$row['Image']."'/></a></td>";  
}
}else{
die(mysql_error());
}
?>
</table>
</body>
</html>