<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reserve Forms</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<script>

       // $('button#register').click(function () {
        function registration(){



            var username = $('input#username').val();
            var emailid = $('input#email').val();
            var password = $('input#password').val();

            $.post("http://localhost:9090/registration?c=registration&m=insrtNUser", {
                username: username,
                emailid: emailid,
                password: password


            }).done(function (userId) {
                if (userId > 0) {

                    alert(username + '! you have been successfully registered');
                }

                else {
                    alert('failed to register');

                }
            });

        }

</script>
<body>
<form class="form-horizontal" id="registration" action='' onsubmit="registration()" method="POST">
    <fieldset>
        <div id="legend">
            <legend class="">Register</legend>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                <p class="help-block">Please provide your E-mail</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                <p class="help-block">Password should be at least 4 characters</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
            <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                <p class="help-block">Please confirm password</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button id='register' class="btn btn-success">Register</button>
            </div>
        </div>
    </fieldset>
</form>
</body>
</html>