<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 18/01/14
 * Time: 22:19
 */

?>

<h3>Shell In A Box</h3>
<span>Web based AJAX terminal emulator</span>
<hr/>
<a target="_blank" id="trans">Load a shell in a new window</a>
<script>
    document.getElementById('trans').href = '' + window.location.origin + ':4200';
</script>
<br/><br/>
