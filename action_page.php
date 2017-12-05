<h1> Please fill out the form</h1>


<h2> Just another header.</h2>

<?php
   if (!isset($_POST['submit'])) {
  $dropdown = $_POST['dropdown'];
	
  
//    if (empty($dropdown($_POST['']))) {
// 		echo "<p style = 'color: red;'class='error'>Please select a campus</p>";
// 		//$okay = FALSE;
// 	} else {
// 		echo "<h4>https://nasiryare206.github.io/form.html</h4>";
// 	} 
 
	if ($dropdown = "selectcampus") {
		echo "<p style = 'color: red;'class='error'>Please select a campus</p>";
		//$okay = FALSE;
	} else {
		echo "<h4>https://github.com/nasiryare206/nasiryare206.github.io/blob/master/form.html</h4>";
	} 
   }
?>
