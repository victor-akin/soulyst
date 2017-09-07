<!doctype html>
<html>
    <head>
        <title>Soulyst</title>
        <link rel="stylesheet" href="<?php echo STYLES ;?>login/index.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body> 
 
 <div class="login-form">
                <div class="form-wrapper">
                <form>
                    <div class="form-field">
                       <label for="email" class="email"></label> 
                        <input type="email" name="email" value="email@email.com" placeholder="email@email.com" />
                    </div>
                    <div class="form-field">
                       <label for="password" class="password"></label>
                        <input type="password" name="password" value="password" placeholder="password" />
                    </div>
                    <div class="form-field">
                        <input type="submit" />
                    </div>
                    
                </form>
                    <div class="other">
                            <span><a href="#">Forgot Password</a></span> |
                            <span><a href="<?php echo PROJECT_PATH.'home' ?>">Home</a></span>
                        </div>
                </div>
            </div>

</body>
</html>