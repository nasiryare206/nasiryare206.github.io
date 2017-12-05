<h1> Please fill out the form</h1>


<h2> Just another header.</h2>

<?php
  $submit = $_POST['submit'];
  $dropdown = $_POST['dropdown'];

//if (!isset($_POST['submit'])) {

	
  
//    if (empty($dropdown($_POST['']))) {
// 		echo "<p style = 'color: red;'class='error'>Please select a campus</p>";
// 		//$okay = FALSE;
// 	} else {
// 		echo "<h4>https://nasiryare206.github.io/form.html</h4>";
// 	} 
 
	if ($dropdown = "selectcampus" && $submit = true) {
		echo "<p style = 'color: red;'class='error'>Please select a campus</p>";
		//$okay = FALSE;
	} else (){
		echo "<h4> https://nasiryare206.github.io/Roomitup/</h4>";
	} 
   //}
?>
