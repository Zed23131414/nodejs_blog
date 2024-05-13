<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStoreMNG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/container.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .info_Product {
        text-align: center;
        color: black;
        background-color: wheat;

    }

    button {
        border: 2px solid #000;
    }

    #show_order {
        background-color: salmon;
        color: white;
    }

    #show_order:hover {
        background-color: red;
    }

    #show_info {
        background-color: green;
        color: white;
    }

    #show_info:hover {
        background-color: gold;
        color: white;
    }

    /*header*/
    .navbar-inverse .navbar-nav>li>a {
        color: wheat;
    }

    .navbar-inverse .navbar-brand {
        color: wheat;
    }

    .navbar-btn {
        margin-top: 8px;
        margin-bottom: 8px;
        background: orange;
        color: white;
    }

    .btn-default {
        color: #333;
        background-color: springgreen;
        border-color: #ccc;
    }

    .navbar-btn {
        margin-top: 8px;
        margin-bottom: 8px;
        background: orange;
        color: white;
    }

    .dropdown-menu>li>a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: wheat;
        white-space: nowrap;
        background: black;
    }

    #info_text {
        font-size: 20px;
        background-color: wheat;
        font-weight: bold;
    }

    /*Form info_Product*/
    p {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php
    include("./views/register_form.php");
    include("./views/login_form.php");  
    include("./views/config.php");
    include("./views/product_info.php");
    include("./views/user/header2.php");
    include("./views/user/container2.php");
    include("./views/footer.php");
    ?>

    <!-- <script src="./js/password_confirm.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/cart.js"></script>

</body>

</html>