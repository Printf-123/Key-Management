<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login2.css">
</head>

<body>

    
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="admin">
    <form>
            <label for="chk" aria-hidden="true">Admin Login</label>
            <input type = "text" name="txt" placeholder="Username" required>
            <input type = "password" name="pass" placeholder="Password" required>

        <button>Login</button>
        <div class="register">
            <p> Don't have account? <a href="#"> Register</a></p>
        </div>
    </form>
    </div>

            <div class="student">

                <form>
                    <label for="chk" aria-hidden="true">Student Login</label>
                    <input type = "text" name="txt" placeholder="Username" required>
                    <input type = "password" name="pass" placeholder="Password" required>

                    <button>Login</button>
                    <div class="register">
                        <p> Don't have account? <a href="#"> Register</a></p>
                    </div>
                </form>
            </div>
</div>

<div class="logo">
    <img src="Images/image.png" class="logo">
   </div>               
</body>




</html>