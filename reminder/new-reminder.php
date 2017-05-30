<?php
//Variables 
//These variables gather data from the form and prepares them for use within the switch in coming lines of php code.
$input_name = strip_tags(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$input_phone = strip_tags(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
$input_zip = strip_tags(filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING));
$input_cmd = filter_input(INPUT_POST, 'cmd', FILTER_SANITIZE_STRING);
?>
<!--The Modal Box-->
<div id="reminderModal" class="modal">
    <div class="wrapper">
    <!--Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Tilmeld dig her</h2>
        </div>
        <div class="modal-body">
            <!--The form where people sign up for the reminder-->
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                <label><b>Navn</b> </label><br>
                <input type="text" name="name" placeholder="Navn..." maxlength="32" autofocus required/>
                <br>
                <label><b>TelefonNummer</b> </label><br>
                <input type="tel" name="phone" placeholder="Telefonnummer..." maxlength="8" required/>
                <br>
                <label><b>PostNummer</b> </label><br>
                <input type="tel" name="zip" placeholder="Postnummer..." maxlength="4" required/>
                <br>
                <button id="submit" type="submit" name="cmd" value="Tilmeld" >Tilmeld</button>
            </form><br>
        </div>    
    </div>
    </div>
</div>

<!--Modal script-->
<script>
//Code for the modal
//Variables //The elements are gathered based on id and class and refer to things within the html.    
var modal = document.getElementById('reminderModal'); //The modal
var btn = document.getElementById("modalBtn"); //The btn
var span = document.getElementsByClassName("close")[0];

    
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "flex";
    modal.style.justifyContent = "center";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--A switch that connects to the database and then inserts the values input by the users into the corresponding columns -->
<?php 
switch($input_cmd) {
    case "Tilmeld":
        require_once("conn.php");//makes use of the connection document
        $sql = 'INSERT INTO reminder (name, phone, zip) VALUES (?,?,?)';//prepares the columns
        $stmt = $con->prepare($sql);
        $stmt->bind_param('sss', $input_name, $input_phone, $input_zip);//Finds the values in the form based on previously noted variables(Top of the document)
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo '<meta http-equiv="refresh" content="0">';//Heads back to the main page
            exit; //Exits and ends the transaction
        } else {
            echo "<br><br><div class='alert'><p>Der var noget der ikke lige funk'ede... Prøv lige igen.=/</p></div>"; //a string that will be triggered in case of connection error or something similar
        }
        break; //End of case
    default: //If the case isn't "Tilmeld" this code will be triggered, it has no real function.
        echo "";
}
?>
