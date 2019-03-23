
<html>
<body>


<form method="POST">
<input type="text" name="person">
<button type="submit" name="submit">Submit</button>
</form>


<?php 
if (isset($_POST['submit'] ) ){
// the user has pressed  submit button
$name =$_POST[ 'person' ];
echo " My Name is ". $name. "." ;

}

?>



</body>
</html>