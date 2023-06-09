<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <script>
    // Function to show the password type in the form of text.
    function myFunction() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
    </script>
</head>
<body>
    <!-- It will be the main page for anonymous user -->
    <!-- Creating a form for login -->
        <div class="card">

            <!-- Creating a form with method post -->
            <form method="post" action="/Home/create">
                <div>
                    <div>

                        <div>
                            <!-- Input for Email -->
                            <h2>Email</h2>
                            <input name="Email" id="Email" type="email" placeholder="Email" autocomplete="off" required>
                        </div>

                    </div>

                    <div>

                        <div>
                            <!-- Input for password -->
                            <h2>Password</h2>
                            <input name="Password" id="Password" type="password" placeholder="Password" required>
                        </div>
                        
                        <div>
                            <!-- Checkbox to show password -->
                            <input type="checkbox" onclick="myFunction()" >Show Password
                        </div>
                    
                    </div>

                    <div>
                        <!-- Login submit type -->
                        <input type="submit" name="Login" value="Login">
                    </div>

                    <div>
                        <!-- Forgot Password -->
                        <a href="/FP/index">Forgot Password ?</a>
                    </div>

                    <div>
                        <!-- Registration Link -->
                        New User ? <a href="/Signup/new">Register Here</a>
                    </div>

                </div>
            </form>
            
        </div>
</body>
</html>
