
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href ="https://boxicons.com/?query=loc">
</head>
<body>
<form  action ="login.php" method ="post">
    <div class = "box">
     <div class="container">
        <div class="header">
            <span>Have an account?</span>
            
            <header>Login</header>
        </div>


        <div class="input">
            <input type="text" name ="username" class="input1" placeholder="Username" required> 
            <box-icon name='envelope' type='solid' ></box-icon>
        </div>

        <div class="input">
            <input type="password" name ="password" class="input1" placeholder="Password" required> 
            <box-icon name='lock-alt' type='solid' ></box-icon>
        </div>
        
        <div class="input">
            <input type="submit" class="submit" name="Login" value="Login">
        </div>

       
        <div class="bottom">
            <div class="left">
                <input type="checkbox" id ="check">
                <label for="check">Remember Me</label>
            </div>
<br>
            <div class="right">
            <label><a href ="#">Forgot password</a></label>
            </div>
        </div>
     </div>
    </div>

</form>

</body>
</html>