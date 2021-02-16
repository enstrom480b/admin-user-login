<?php
session_start();
if(!$_SESSION["a"]){
    $a = rand(1,50);
    $b = rand(1,50);
     $_SESSION["a"] =$a;
    $_SESSION["b"] = $b;  
}
$email="";
$message="";
$name="";
$result="";
$error="";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$check=$_POST['secCheck'];

if(!$_POST['name'])
{
	$error.='please enter your name<br>';
}

if(!$_POST['email']||!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){$error.='please enter a valid email<br>';}

if(!$_POST['message'])
{
	$error.='please enter a message<br>';
}
if(intval($_POST['secCheck'])!==($_SESSION['a']+$_SESSION['b']))
{
	$error.='please check your count<br>';
}

}
if($error=='')
{
	
	$from='ekiprono99@gmail.com';
	$to='ekiprono99@gmail.com';
	$subject='message from contact form';
	$body="From:'$name($email)'\nMessage\n$message";
	$headers="MIME-Version:1.0"."\r\n";
	$headers.="Content-type:text/html;charset=UTF-8"."\r\n";
	$headers.='From:<'.$from.'>'."\r\n";
	if(mail($to,$subject,$body,$headers))
	{
	$result='<div class="alert alert-success">'.'Mail Sent';
	}
	else{
		
			$result='<div class="alert alert-success">'.'Mail wasn\'t Sent';
	}


	
}
else
{
	$result='<div class="alert alert-danger">'.$error;
}
echo $_SESSION['a']+$_SESSION['b'];

?>
   <html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact form</title>
        <!-- Latest compiled and minified CSS -->
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
		
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b74b0d1f60.js" crossorigin="anonymous"></script>	
        </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                            <p class="text-danger">You need to enter a name value</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" placeholder="your@email.com" class="form-control">
                            <p class="text-danger">You need to enter a valid email</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea id="message" name="message" rows="4" class="form-control"></textarea>
                            <p class="text-danger">You need to enter a message</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="secCheck" class="col-sm-2 control-label">
                            <?php echo $_SESSION["a"]  . ' + ' .$_SESSION["b"] ; ?>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" id="secCheck" name="secCheck" class="form-control">
                            <p class="text-danger">Answer the question above</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" value="Send" class="btn btn-primary btn-large btn-block" id="submit" name="submit">
<label><?php echo $result?></label>
                        </div>
						
                    </div>

                </form>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
		$('form').on('submit',function(){
			$('.text-danger').hide()
			var holdervalue=false
			$(this).find('input[type!="hidden"]').each(function(){
			if(!$(this).val()){
				
				holdervalue=true;
			$(this).parent().find('.text-danger').show();
			}
					
			})
			if(holdervalue){
				
				return false;
			}
			console.log('form submitted')
		})
		</script>
       
    </body>
</div>
</div>
</div>
</div>

</html>