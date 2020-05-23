
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <style>
        body{
            background-image:url("bacground.png");
            background-repeat:repeat-x;
        }
    </style>
</head>
<body>
<div id="login_center">
    <img src="login form.png" width="100%" height="500px">
    <div id="admin_header">
        <p id="admin_logname">Admin Login</p>
        <p id="admin_worktips">Please login here to insert or update site information</p>
    </div>

    <div id="login_admin">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <table>

                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Email Address"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>

                <tr>
                    <td colspan="2">
						<span style="float:right">
						<input type="submit" name="login" value="Login">
						<input type="reset" value="Reset">
						</span>
                    </td>
                </tr>

            </table>

        </form>
    </div>

</div>

</body>
</html>
