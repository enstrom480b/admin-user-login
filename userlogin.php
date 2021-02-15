<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b74b0d1f60.js" crossorigin="anonymous"></script>




<div class="container">
<div class="col-md-12">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h3 class="text-center">sign up </h3>

<form method="POST">
<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" autocomplete="off">
</div>

<div class="form-group">
<label>Select your Role</label>
<select name="role">
<option value="">Select Your Role</option>
<option value="">Admin</option>
<option value="">User</option>
</select>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" autocomplete="off">
</div>

<button class="btn-outline-warning" type="submit">Submit</button>
</form>

</div>
</div>
</div>