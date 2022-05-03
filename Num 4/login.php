<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div>
<form1 action="/action_page.php">
  <label for="fname">First names:</label><br>
  <input type="text" id="fname" name="fname" default="Example Like"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="Address">Address:</label><br>
  <input type="text" id="address" name="address" default="7 Brook street, Harare, Zimbabwe"><br>
  <label for="email">E-mail:</label><br>
  <input type="text" id="email" name="email" default="Example Like"><br>
  <input type="submit" value="Submit">
</form1> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

<input type="checkbox" id="students" name="students" value="students">
<label for="students"> the students</label><br>
<input type="checkbox" id="location" name="location" value="location">
<label for="location"> the location</label><br>

<input type="checkbox" id="campus" name="campus" value="campus">
<label for="campus"> the campus</label><br>
<input type="checkbox" id="atmosphere" name="atmosphere" value="campus">
<label for="atmosphere"> the atmosphere</label><br>
<input type="checkbox" id="sports" name="sports" value="sports">
<label for="sports"> the sports</label><br>


<p>Choose how you discovered the institute:</p>

<form>
  <input type="radio" id="Friend" name="interest_source" value="Friends">
  <label for="Friends">Friends</label><br>
  <input type="radio" id="Television" name="interest_source" value="Television">
  <label for="Television">Television</label><br>
  <input type="radio" id="Internet" name="interest_source" value="Internet">
  <label for="Television">Internet</label><br>
  <input type="radio" id="Other" name="interest_source" value="Other">
  <label for="Other">Other</label><br>
  <input type="submit" value="Submit">
</form>
<h2>If you have specific feedback, please write to us...</h2>
            <textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<br>
Thank you for the support<br>
Answers have been sent the the respective admins
</div>

