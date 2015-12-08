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
	<div class="float-right">hey, thanks for being awesome and adding cards.</div>
</div>

<h1 class="heading">
Add Card
</h1>
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'added') !== false) {
    echo '<div class="bg-success success-msg"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Awesome, you just added a card to our database! Thanks!</div>';
}
?>
<div class="bg-info info-msg text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Be kind to the lazy developer: Please don't use apostrophes (').</div>
<form class="form-horizontal" action="processing.php" method="post">
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardName">Name</label>  
  <div class="col-md-10">
  <input id="cardName" name="cardName" placeholder="Card Name" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardType">Type</label>
  <div class="col-md-10">
    <select id="cardType" name="cardType" class="form-control">
      <option value="Ruler">Ruler</option>
      <option value="J-Ruler">J-Ruler</option>
      <option value="Resonator">Resonator</option>
      <option value="Spell:Chant-Instant">Spell:Chant-Instant</option>
      <option value="Spell:Chant-Standby">Spell:Chant-Standby</option>
      <option value="Addition:Field">Addition:Field</option>
      <option value="Addition:Resonator">Addition:Resonator</option>
      <option value="Regalia">Regalia</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardSet">Set</label>
  <div class="col-md-10">
    <select id="cardSet" name="cardSet" class="form-control">
      <option value="The Crimson Moon Fairy Tale">The Crimson Moon Fairy Tale</option>
      <option value="The Castle of Heaven and the Two Towers">The Castle of Heaven and the Two Towers</option>
      <option value="The Moon Priestess Returns">The Moon Priestess Returns</option>
      <option value="The Millennia of Ages">The Millennia of Ages</option>
      <option value="Vingolf Series: Engage Knights">Vingolf Series: Engage Knights</option>
      <option value="The Twilight Wanderer">The Twilight Wanderer</option>
      <option value="The Seven Kings of the Lands">The Seven Kings of the Lands</option>
    </select>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardAttribute">Attribute</label>
  <div class="col-md-10">
    <select id="cardAttribute" name="cardAttribute" class="form-control" multiple="multiple">
      <option value="Light">Light</option>
      <option value="Fire">Fire</option>
      <option value="Water">Water</option>
      <option value="Wind">Wind</option>
      <option value="Night">Night</option>
      <option value="Uncolored">Uncolored</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardCost">Total Cost</label>  
  <div class="col-md-10">
  <input id="cardCost" name="cardCost" placeholder="1L1U, NA, etc." class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardRarity">Rarity</label>
  <div class="col-md-10">
    <select id="cardRarity" name="cardRarity" class="form-control">
      <option value="C">Common</option>
      <option value="U">Uncommon</option>
      <option value="R">Rare</option>
      <option value="SR">Super Rare</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardNumber">Card Number</label>  
  <div class="col-md-10">
  <input id="cardNumber" name="cardNumber" placeholder="XXX-### Rarity (SKL-001 R)" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardRace">Race</label>  
  <div class="col-md-10">
  <input id="cardRace" name="cardRace" placeholder="Race" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardDetails">Details</label>
  <div class="col-md-10">                     
    <textarea class="form-control" id="cardDetails" name="cardDetails">All of the card text, including flavor text, etc.</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardAttack">Attack</label>  
  <div class="col-md-10">
  <input id="cardAttack" name="cardAttack" placeholder="100, 0, etc. THIS MUST BE A NUMBER" class="form-control input-md" required="" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardDefense">Defense</label>  
  <div class="col-md-10">
  <input id="cardDefense" name="cardDefense" placeholder="100, 0, etc. THIS MUST BE A NUMBER" class="form-control input-md" required="" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cardImage">Image URL</label>  
  <div class="col-md-10">
  <input id="cardImage" name="cardImage" placeholder="Grab URL from fowtcg.us for now." class="form-control input-md" type="text">
    
  </div>
</div>
<div class="form-group">
	<div class="col-md-1"></div>
	<div class="col-md-10">
<input class="btn btn-lg btn-success"type="submit" value="Add Card">
</div>
</div>
</fieldset>
</form>
</body>
</html>