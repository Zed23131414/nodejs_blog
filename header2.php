<div id="cart">
    <div class="name">CART</div>
    <div class="listCart"></div>
</div>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BookStoreMNG</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#bestseller">Product</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle category" data-toggle="dropdown" href="#">Category
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#bestseller">Best Seller</a></li>
                        <li><a href="#ligtnovel">Light Novel</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Coming Soon</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <a href=" #" class="btn btn-default navbar-btn" id="cartbtn">
                <span class="glyphicon glyphicon-shopping-cart"></span> Cart
            </a>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php $a = $_GET['username']?>
                    <a type="button">Hello <i><?php echo $a?></i></a>
                </li>
                <li><a type="button" class="" href="./index.php">Logout</a></li>
            </ul>
        </div>
        <div id="signup" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign Up Form</h4>
                    </div>
                    <div class="modal-body">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="name" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                    required pattern=".*\S.*" title="Password cannot be empty">
                                <small id="passwordMatchError" class="text-danger"></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="submit"
                                name="register">Register</button>
                        </form>
                        <script>
                        document.querySelector('#submit').onclick = function() {
                            var password = document.querySelector('#password').value,
                                confirmPassword = document.querySelector('#confirmPassword').value;
                            if (password == "") {
                                alert('Please enter password');
                            } else if (password != confirmPassword) {
                                alert('password do not match, please try again');
                            } else {
                                return true;
                            }
                        }
                        </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login Form</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="submit"
                                name="login">Login</button>
                            <p>Don't have a accout? <a href="" type="button" data-toggle="modal" data-target="#signup"
                                    data-dismiss="modal">Register</a></p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>