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
        <p id="admin_regname">New Admin Registration</p>
        <p id="reg_worktips">Please Login here after registration</p>
        <div id="reg_log">
            <a href="/adminlogin">Login</a>
        </div>
    </div>
    <div id="reg_admin">
        <form action="/adminlogin" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="please give your username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="please give your password"></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><input type="text" name="name" placeholder="please give your date"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="please give your email"></td>
                </tr>
                <tr>
                    <td colspan="2">
						<span style="float:right">
						<input type="submit" name="register" value="Submit">
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
