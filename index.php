<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Send Mail Using PhpMailer</title>
    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body><div class="row">
   <div class="col-sm-2"></div>
   <div class="col-sm-8">
<form action="phpmail.php" method="post">
<br>
<input type="text" name="from" size="120" placeholder="Youremail@gmail.com"><br>
<br>
<input type="text" name="password" size="120" placeholder="Password of your email "><br>
<br>
<input type="text" name="port" size="120" placeholder="port number 587 in case of gmail"><br>
<br>
<input type="text" name="to" size="120" placeholder="recipent email address yourfriend@gmail.com"><br>
<br>
<input type="text" name="subject" size="120" placeholder="Subject of mail hii friend"><br>
<br>
<textarea  name="message" rows="20" cols="122">Your Message</textarea ><br>
<input type="submit" value="Send email" class="btn btn-primary"/>
</form>
   <div class="col-sm-2"></div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  </body>
</html>
