<?php

include 'header.php';


?>
<div id="main-content">





<form action="./includes/changepass.php" class="post-form" method="post">

<div class="form-group">
<label>Old Password</label>
<input type="text" name="oldpwd" required/><br>



</div>

<div class="form-group">
<label>New Password</label>
<input type="password" name="npwd" required/><br>



</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="cpwd" required/><br>



</div>
<input type="submit" name="save" class="submit" value="save" >



</form>
</div>