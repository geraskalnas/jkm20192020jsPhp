<div id="siteControls">
	<p>Veiksmai</p>
    <ul class="categories">
        <?php
		foreach($veiksmai as $raktas => $reiksme){
			echo "<li><a href=\"$reiksme\">$raktas</a></li>\n";
		}
		?>
    </ul>
    <div class="ads">
        <!-- ads code -->
    </div>
 
</div>