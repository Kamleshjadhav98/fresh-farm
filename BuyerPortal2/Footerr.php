<!-- footer.php -->
<footer class="myfooter text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-left">
                <h5>Buy Farm</h5>
                <p>Your trusted platform for agricultural goods and services.</p>
            </div>
            <div class="col-md-4">
                <h6>Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-right">
                <h6>Follow Us</h6>
                <a href="#" class="text-goldenrod mr-3"><i class="fa fa-facebook"></i></a>
                <a href="#" class="text-goldenrod mr-3"><i class="fa fa-twitter"></i></a>
                <a href="#" class="text-goldenrod mr-3"><i class="fa fa-instagram"></i></a>
                <p>&copy; 2024 Buy Farm. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- CSS for the footer -->
<style>
    .myfooter {
        background-color: #292b2c;
        color: goldenrod;
        padding: 20px 0;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    .myfooter a {
        color: goldenrod;
        text-decoration: none;
    }

    .myfooter a:hover {
        color: white;
    }

    .myfooter h5, .myfooter h6 {
        margin-bottom: 10px;
    }

    .myfooter p {
        font-size: 14px;
    }

    @media (max-width: 576px) {
        .myfooter .text-right, .myfooter .text-left {
            text-align: center;
        }
    }
</style>
