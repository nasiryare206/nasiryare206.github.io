<h1> Please fill out the form</h1>


<h2> Just another header.</h2>

<?php
   
  $dropdown = $_POST['dropdown'];
	
  
  if (($_POST['selectcampus'])) {
		echo "<p style = 'color: red;'class='error'>Please select a campus</p>";
		$okay = FALSE;
	} else {
		echo "<h4>form.html</h4>";
	}
  
?>
