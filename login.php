<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include('signin.php'); ?>
<form id="loginForm" method="post">
    <div class="form-group">
    <label for="username" class="control-label">Username / Email id</label>
    <input type="text" class="form-control" id="username" name="username"  required="" title="Please enter you username or Email-id" placeholder="email or username" >
    <span class="help-block"></span>
    </div>
    <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required="" title="Please enter your password">
        <span class="help-block"></span>
    </div>
    <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
</form>
</body>
</html>