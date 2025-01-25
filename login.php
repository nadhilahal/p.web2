<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="style/image/bg.png" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- style -->
    <link rel="stylesheet" href="style/login.css" />
  </head>

  <body>
    <div class="container">
        <div class="textcontainer">
        <h1>Login</h1>
        </div>
        

        <?php
            $valid_username = "nadhilah";
            $valid_password = "nad123";
            $error_message = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);

                // Validasi username dan password
                if ($username === $valid_username && $password === $valid_password) {
                    header("Location: biodata.php");
                    exit();
                } else {
                    $error_message = "Username atau password salah!";
                    echo $error_message;
                }
            }
        ?>

        <form action="" method="POST">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" placeholder="Enter Username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Enter Password" required>

            <button type="submit">Login</button>

            <label>
                <input type="checkbox" name="remember" checked="checked"> Remember me
            </label>
        </form>

        <br>
        <a href="#"><button type="button" class="cancelbtn">Cancel</button></a>
        <span class="psw"><a href="index.html">Forgot password?</a></span>
    </div>
  </body>
</html>
