<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@900&family=Roboto:wght@500&display=swap");
    @import url();

    body {
        line-height: 1.5;
        font-family: "Poppins", sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1170px;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    ul {
        list-style: none;
    }

    .footer {
        background-color: #24262b;
        padding: 70px 0;
    }

    .foot-col {
        width: 25%;
        padding: 0 15px;
    }

    .foot-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 30px;
        font-weight: 500;
        position: relative;
    }

    .foot-col h4::before {
        content: "";
        position: absolute;
        left: 7;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .foot-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .foot-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
    }

    .foot-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .foot-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .foot-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(red, green, blue, alpha);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .foot-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
    }

    /*responsive*/
    @media (max-width: 767) {
        .foot-col {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media (max-width: 574) {
        .foot-col {
            width: 100%;
        }
    }
    </style>
</head>

<body>

</body>
<footer class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="foot-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h4>Online Shop</h4>
                <ul>
                    <li><a href="#">Sách bán chạy</a></li>
                    <li><a href="#">Sách tâm lý</a></li>
                    <li><a href="#">Truyện tranh</a></li>
                    <li><a href="#">Sách giáo khoa</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>