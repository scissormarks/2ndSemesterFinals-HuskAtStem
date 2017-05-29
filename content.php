<div id="pagecontent" class="">
    <header class="wrapper">
        <div>
            <p>Region Sjælland</p>
            <h1>Ringsted</h1>
        </div>    
        <img src="img/regioner/sjaelland.png">
    </header>
    <hr>
        <? require('reminder/reminder.php');?> <!--Loads the reminder from a seperate file-->
        <? require_once('page-content/tableofcontent.php');?> <!--Loads the table of content from a seperate file-->
    <h2 id="news">Lokal Aktuelt</h2>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut risus sed libero pharetra auctor quis vel diam. Nam egestas rutrum turpis sed egestas. Donec pulvinar odio sed lacus malesuada molestie. Nulla in massa lorem. Vivamus sodales vestibulum nunc, et semper eros sagittis eu. </p>
    </div>
    <h2 id="parties">Partier</h2>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut risus sed libero pharetra auctor quis vel diam.</p>
        <? require_once('page-content/parties.php');?> <!--Loads the parties from a seperate file-->
    </div>
    <h2 id="lastelection">Forrige Valg</h2>
    <div class="content">
        <p>Donec pulvinar odio sed lacus malesuada molestie. Nulla in massa lorem. Vivamus sodales vestibulum nunc, et semper eros sagittis eu. </p>
        <? require_once('page-content/previous-election.php');?> <!--Loads the previous election from a seperate file-->
    </div>
    <h2 id="cities">Byer</h2>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <? require_once('page-content/cities.php');?> <!--Loads the cities from a seperate file-->
    </div>
</div>