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

/* Search bar */
form.search {
    margin-left: auto;
    margin-right: auto;
    margin-top: 150px;
    width: 50%;
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
/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
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

<!-- search bar  -->
<form class="search" action="action_page.php">
    <input type="text" placeholder="Search by zip code or park name..." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>

<!--Login form -->
<div class="row">
    <div class="column">
    <form action="/action_page.php" style="border:1px solid #ccc">
    <div class="container">
    <h1>Login</h1>
    <label for="uname"><b>Username</b></label>
<input type="text" placeholder="Username" name="uname" required>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Password" name="psw" required>

<button type="submit">Login</button>
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
</label>
</div>

<div class="container" style="background-color:#f1f1f1">

    <span class="psw">Forgot <a href="#">password?</a></span>
</div>
</form>
</div>
<!--Registration form -->
<div class="column">
    <form action="/action_page.php" style="border:1px solid #ccc">
    <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
<hr>

<label for="email"><b>Email</b></label>
<input type="text" placeholder="Email" name="email" required>

<label for="city"><b>City</b></label>
<input type="text" placeholder="City" name="city" required>

<label for="phone number"><b>Phone Number</b></label>
<input type="text" placeholder="Phone Number (optional)" name="phone number" option>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Password" name="psw" required>

<label for="psw-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
<hr>
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<div class="g-recaptcha" data-sitekey="6Lf0CFEUAAAAABWkxWHS4x3UtoQcUFaHlYsZj9mK"></div>

    <button type="submit" class="registerbtn">Register</button>
    </div>
    </form>
    </div>
    </body>
    </html>