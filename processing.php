<?php
$username="cowisein_fow";$password="Park120!";$database="cowisein_fow";
$db_handle=mysql_connect("localhost",$username,$password);
$db_found=mysql_select_db($database, $db_handle) or die( "Unable to select database");


$selected_Type = $_POST['cardType'];  // Storing Selected Value In Variable
$selected_Rarity = $_POST['cardRarity'];
$selected_Color = $_POST['cardAttribute'];
$selected_Set = $_POST['cardSet'];
$selected_Image = $_POST['cardImage'];
$selected_Attack = $_POST['cardAttack'];
$selected_Defense = $_POST['cardDefense'];
$selected_Details = $_POST['cardDetails'];
$selected_Race = $_POST['cardRace'];
$selected_Number = $_POST['cardNumber'];
$selected_Cost = $_POST['cardCost'];
$selected_Name = $_POST['cardName'];

    
if ($db_found) {

$sql = "INSERT INTO Cards (Name, Type, cardSet, Attribute, TotalCost, Rarity, CardNumber, Race, Details, Attack, Defense, Image)
VALUES ('$selected_Name', '$selected_Type', '$selected_Set', '$selected_Color', '$selected_Cost', '$selected_Rarity', '$selected_Number', '$selected_Race', '$selected_Details', '$selected_Attack', '$selected_Defense', '$selected_Image')";

mysql_query($sql);
mysql_close($db_handle);
header( "Location: http://www.fow.cowise.info/addcard.php?event=added" ); 
}
else {
mysql_close($db_handle);
echo "error";
}
?>
