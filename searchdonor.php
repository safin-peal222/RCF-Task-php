<?php 

include 'header.php';

?>
<div id="main-content">

<h2>Search Record</h2>



<form action="searchresult.php" class="post-form" method="post">


<div class="form-group" data-aos="fade-up">

<label>Blood Group</label>
<select name="class">
<option value="" selected disabled>Blood Group</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="A-">A-</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="AB-">AB-</option>
</select>
</div>

<input class="submit" type="submit" name="search-by-bg" value="Save"  />

<!--search with area

<div id="search-bar">
<div class="form-group mt-5">
<label for="">Search</label>
<input type="text" name="search" id="search">
</div>

</div>

search with area-->


</form>


</div>

<?php
include("./footer.php");
?>


