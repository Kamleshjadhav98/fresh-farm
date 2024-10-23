<?php
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyer login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

/* Footer Styling */
footer {
    background: #111;
    padding: 150px 30px;
    color: #fff;
    text-align: center;
}

footer span a {
    color: crimson;
    text-decoration: none;
}

footer span a:hover {
    text-decoration: underline;
}

.footer-col .social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #e00d0d;
    transition: all 0.5s ease;
}

.footer-col .social-links a:hover {
    color: #24262b;
    background-color: #007bff;
}

/* Responsive */
@media (max-width: 767px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}

@media (max-width: 574px) {
    .footer-col {
        width: 100%;
    }
}

/* Basic Reset */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Main Content Styling */
.content {
    padding: 20px;
    min-height: calc(100vh - 60px); /* Adjust if footer height changes */
}

/* Footer Styling */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 10px;
}

.social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: #444;
    color: #fff;
    border-radius: 50%;
    text-decoration: none;
    font-size: 20px;
    transition: background-color 0.3s, color 0.3s;
}

.social-icon:hover {
    background-color: #555;
}

.social-icon i {
    margin: 0;
}

.footer-text {
    font-size: 14px;
}

    </style>
</head>

<body>

    <main class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header border border-dark" style="background-color:#292b2c">
                            <h4 style="font-style:bold;color:goldenrod;text-align:left">Login</h4>
                        </div>
                        <div class="card-body border border-dark">
                            <form name="my-form" action="BuyerLogin.php" method="post">

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right  "><b><i class="fas fa-phone-alt mr-2"></i>Phone Number</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-lock mr-2"></i>Password</b></label>
                                    <div class="col-md-6">
                                        <input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn " style="background-color:#292b2c;color:goldenrod" name="login" value="Login">
                                        Login
                                    </button>
                                </div>
                                <br>
                                <div class="col-md-6 offset-md-4">
                                    <label id="forgotPassword"><a id='link' href="BuyerForgotPassword.php"><b style="color:black"> Forgot your password ?</b></a></label>
                                    <br>
                                    <label id="account"><a id='link' href="BuyerRegistration.php"><b style="color:black">Create New Account</b></a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
 <footer>
        <div class="social-links">
            <a href="https://www.instagram.com/kamlesh__jadhav__0323" target="_blank" class="social-icon" title="Follow us on Instagram">
                <i class="fab fa-instagram"></i>
            </a> 
            <a href="https://www.facebook.com/kamalesh jadhav" target="_blank" class="social-icon" title="Follow us on Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://wa.me/8308717982" target="_blank" class="social-icon" title="Chat with us on WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.linkedin.com/in/kamaleshjadhav0323" target="_blank" class="social-icon" title="Connect with us on LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/yourusername" target="_blank" class="social-icon" title="Follow us on GitHub">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <span>Created By <a href="https://www.codingnepalweb.com">Kamlesh Jadhav</a> | <span class="far fa-copyright"></span> &copy; 2024 All Rights Reserved.</span>
    </footer>

    <script src="script.js"></script>

</body>

</html>

<?php
include("../Includes/db.php");

if (isset($_POST['login'])) {

    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_password = '$encryption'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('BuyerLogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['buyer_id'];
    }

    $_SESSION['phonenumber'] = $phonenumber;
    echo "<script>window.open('../BuyerPortal2/bhome.php','_self')</script>";
}

?>