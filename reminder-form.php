<?php

//Variables
	$input_name = strip_tags(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
	$input_phone = strip_tags(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
	$input_zip = strip_tags(filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING));
	$input_cmd = filter_input(INPUT_POST, 'cmd', FILTER_SANITIZE_STRING);

?>

<p>Tilmeld dig her</p>
<form action="form-profile.php" method="post">
    <label ><b>Navn</b> </label><br>
    <input type="text" name="name" maxlength="32" autofocus required/>
    <br>
    <label ><b>Telefon Nummer</b> </label><br>
    <input type="tel" name="phone" maxlength="8" required/>
    <br>
    <label ><b>Post Nummer</b> </label><br>
    <input type="tel" name="zip" maxlength="4" required/>
    <br>
    <button id="submit" type="submit" value="Tilmeld" >Tilmeld</button>
</form><br>