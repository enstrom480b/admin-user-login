
<form method="post" style="align-item:center">
<table>
<tr>
<td>
<td><select name="type">
<option value=-1>Select user type</option>
<option value="admin">Admin</option>
<option value="user">User</option>
</select></td>
</tr>
<tr>
<td>username</td>
<td><input type"text" name="username" placeholder="username"></td>
</tr>
<tr>
<td>username</td>
<td><input type"text" name="pwd" placeholder="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><button type"submit" name="submit" value="login">Login</td>
</tr>



</form>
<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'unable to establish connection';
}
$db=mysqli_select_db($con,'multilevel');
if(!$db)
{
	echo 'database not found'.mysql_error();
}
else{
	echo 'connected';
}
	if(isset($_POST['submit']))
	{
	$type=$_POST['type'];
	$username=$_POST['username'];
	$password=$_POST['pwd'];
	$query="select *from login where username='$username'and password='$password'and type='$type'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		if($row['username']===$username&&$row['password']===$password&&$row['type']==='Admin')
			
			{
				header('Location:admin.html');
			}
			elseif($row['username']===$username&&$row['password']===$password&&$row['type']==='User')
			
			{
				header('Location:user.html');
			}
	}
	
	
	}


