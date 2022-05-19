<!doctype html>
<html>
    <section class ="showcase">
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="css/1-login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>

    <body>
        <video src="img/log.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
            <div class="content">
                <header>TPI</header>
                <form autocomplete="off" action="log_in_out.php" method="post">
                    <div class="field">
                        <span class="fa fa-user"></span>
                        <input type="text" name="uname" placeholder="User Name" required >
                    </div>
                    <div class="field space">
                        <span class="fa fa-lock"></span>
                        <input type="password" name="pass" class="pass-key" placeholder="Password"  required >
                        <span class="show">SHOW</span>
                    </div>
                    <br>
                    <br>
                    <br>
                   <input type="submit" name="submit" class="btn2" value="LOGIN">
                
                    
                    <script>
                        const pass_field = document.querySelector('.pass-key');
                        const showBtn = document.querySelector('.show');
                        showBtn.addEventListener('click', function()
                        {
                            if(pass_field.type === "password"){
                                pass_field.type = "text";
                                showBtn.textContent = "HIDE";
                                showBtn.style.color = "#3498db";
                            }
                            else
                            {
                                pass_field.type = "password";
                                showBtn.textContent = "SHOW";
                                showBtn.style.color = "#222";
                            }
                        });
                    </script>
                </form>
            </div>
    <body>
    </section>
</html>