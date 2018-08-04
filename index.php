<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116671556-1"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration page</title>
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style>

        body {
            margin:0;
        }

        h1 {
            margin-top: 100px;
        }



        /* Style the search field */
        form.search input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        /* Style the submit button */
        form.search button {
            float: left;
            width: 5%;
            padding: 10px;
            background: #000000;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none; /* Prevent double borders */
            cursor: pointer;
        }

        form.search button:hover {
            background: #0b7dda;
        }

        /* Clear floats */
        form.search::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Navigation bar*/
        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar a {
            float: right;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .content {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .navbar a:hover {
            background: #ddd;
            color: black;
        }
    </style>
    <!--Google reCaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<!-- nav bar -->
<div class="navbar">
    <a href="#WelcomeUser">Welcome user</a>
    <a href="#logOut">Log out</a>
</div>


<div class = "content">

    <div class="row">
    <!--Registration form -->

        <form action="/action_page.php" style="border:1px solid #ccc">
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="fname"><b>First Name</b></label>
                <input type="text" placeholder="F. Name" name="fname" required>

                <label for="lname"><b>Last Name</b></label>
                <input type="text" placeholder="L. Name" name="lname" required>
                <div class="row">
                    <div class="row">
                    <label for="address"><b>Address</b></label>
                    <input type="text" pattern="[a-zA-Z0-9_-. ]{1,40}" class="widefat-main" placeholder="up to 40 chars only" name="address" required>
                    <label for="zip"><b>Zip Code</b></label>
                    <input type="text" pattern="[0-9]{5}" class="widefat-main" placeholder="5 digit zip" name="zip" required>
                </div>
                </div>
                <div class="row">
                    <div class="row">
                        <label for="Education"><b>Education Level</label>


                        <select id="Education" name="Education" placeholder="Select One" required>
                            <option value="highschool">High School</option>
                            <option value="college">College</option>
                            <option value="Grad">Graduate Studies</option>
                            <option value="PHD">P.H.D.</option>
                        </select>

                    <label for="income"><b>Income (Yearly)</label>


                    <select id="income" name="income" placeholder="Select One" required>
                        <option value="low">Less than $50k</option>
                        <option value="med">$50k - $100k</option>
                        <option value="high">More than $100k</option>
                    </select>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="row">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email" name="email" required>

                    <label for="phone number"><b>Phone Number</b></label>
                    <input type="text" placeholder="Phone Number (optional)" name="phone number" option>
                </div>
                </div>
                    <div class="row">
                        <div class="row">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Password" name="psw" required>

                <label for="psw-repeat"><b>Confirm Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <hr>
                <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p>

                            <div class="g-recaptcha" data-sitekey="6LfjMWgUAAAAAGJ4UcWNWfyiAZceGGB6nHotwzMH"></div>

                <button type="submit" class="registerbtn"><a href="confirm.php">Register</button>
            </div>


        </form>
    </div>
</div>
</body>
</html>