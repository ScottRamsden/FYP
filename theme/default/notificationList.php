<div class="homeblock" id="notifications">
    <h2>Notifications</h2>
    <hr/>
    <h4>Listed in order of importance, description of the notice and a solution if avaliable.</h4>
    <br/>
	<hr/>
    <h3 style="color:red;">Offline Services</h3>
    <?php
	foreach(getOfflineServices() as $service){
	echo '<b>' . $service . ' </b>';
}?>
<hr/>

</div>
