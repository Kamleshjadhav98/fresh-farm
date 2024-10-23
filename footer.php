<html>
    <head>
    <style>
        /* Footer Styling */
/* Footer Styling */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
    display: none; /* Initially hidden */
}

@media (max-height: 800px) {
    footer {
        display: flex;
    }
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

.portfolio-item {
    position: relative;
    overflow: hidden;
    display: inline-block;
}
</style>
<script>
    window.addEventListener('scroll', function() {
        const footer = document.querySelector('footer');
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            footer.style.display = 'block';
        } else {
            footer.style.display = 'none';
        }
    });
</script>
</head>
<body>
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
    </head>