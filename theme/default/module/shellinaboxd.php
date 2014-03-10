<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 18/01/14
 * Time: 22:19
 */

?>

<h3>Shell In A Box</h3>
<hr/>
</br>
<div style="margin:auto;width:315px;text-align:center;">
<span>Web based AJAX terminal emulator</span>
<br/>
<a target="_blank" id="trans">Start a shell window</a>
</div>
<script>
    document.getElementById('trans').href = '' + window.location.origin + ':4200';
</script>
<br/><br/>
