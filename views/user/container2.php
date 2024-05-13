<div class="cart">

</div>
<div class="container" style="position: relative;">
    <img class="img-responsive" src="./Images/banner.jpg" alt="">
    <div class="row" id="bestseller">
        <h1 style="border-bottom: 3px solid orange;">Best Seller</h1>
    </div>
    <div class="row">
        <div class="col-md-3" id="list">
            <div class="panel-group" id="item" data-key="1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Naruto</div>
                    <div class="panel-body text-center"><img src="./images/book_naruto1.jpg" id="1"
                            class="img-responsive" alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Naruto</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button data-toggle="modal" data-target="#login" id="show_order"
                            onclick="purchase()">Mua</button>
                        <button id="show_info" onclick="showProductInfo(1)">Xem thông tin</button>
                        <button class="remove" onclick="Remove(1)"><i class="glyphicon glyphicon-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3" id="list">
            <div class="panel-group" id="item" data-key="2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Dragon Ball</div>
                    <div class="panel-body text-center"><img src="./images/book_DB1.jpg" id="2" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Dragon Ball</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('Dragon ball',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(2)">Xem thông tin</button>
                        <button class="remove" onclick="Remove(2)"><i class="glyphicon glyphicon-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default" id="item" data-key="3">
                    <div class="panel-heading text-center">Blue Block</div>
                    <div class="panel-body text-center"><img src="./images/book_blueblock.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Blue Block</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('Blue Block',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(3)">Xem thông tin</button>
                        <button class="remove" onclick="Remove(1)"><i class="glyphicon glyphicon-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group" id="item" data-key="4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">One Piece</div>
                    <div class="panel-body text-center"><img src="./images/book_OP1.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: One Piece</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('One Piece',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(4)">Xem thông tin</button>
                        <button class="remove" onclick="Remove(1)"><i class="glyphicon glyphicon-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="ourproduct">
        <h1 style="border-bottom: 3px solid orange;">Our Product</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Black Clover</div>
                    <div class="panel-body text-center"><img src="./images/book_blackclover.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Black Clover</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('Black clover',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(5)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Dr Stone</div>
                    <div class="panel-body text-center"><img src="./images/book_drstone.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Dr Stone</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('drstone',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(6)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Grim Gap</div>
                    <div class="panel-body text-center"><img src="./images/book_grimgar.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Grim Gap</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('Grim Gap',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(7)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Eighty Six</div>
                    <div class="panel-body text-center"><img src="./images/book_eightysix.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Eighty Six</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('Eighty Six',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(8)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Overlord</div>
                    <div class="panel-body text-center"><img src="./images/book_overlord.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Overlord</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('Overlord',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(9)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Kimetsu No Yaiba</div>
                    <div class="panel-body text-center"><img src="./images/book_kimetsu.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Kimetsu No Yaiba</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('KNY',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(10)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">My Hero Academia</div>
                    <div class="panel-body text-center"><img src="./images/book_MHA.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: My Hero Academia</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('MHA',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(11)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Jujutsu Kaisen</div>
                    <div class="panel-body text-center"><img src="./images/book_jujutsukaisen1.jpg"
                            class="img-responsive" alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Jujutsu Kaisen</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm(JJK,150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(12)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="ourproduct">
        <h1 style="border-bottom: 3px solid orange;">Light Novel</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Giả Kim</div>
                    <div class="panel-body text-center"><img src="./images/book_giakim.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Nhà Giả Kim</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('giakim',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(13)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Hai số phận</div>
                    <div class="panel-body text-center"><img src="./images/book_twopeople.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Hai số phận</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('twopeople',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(14)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Stars</div>
                    <div class="panel-body text-center"><img src="./images/book_stars.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Stars</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('stars',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(15)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Pháp Y</div>
                    <div class="panel-body text-center"><img src="./images/book_phapy.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Pháp Y</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('phapy',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(16)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="ourproduct">
        <h1 style="border-bottom: 3px solid orange;">Education</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Mẹ làm gì có ước mơ</div>
                    <div class="panel-body text-center"><img src="./images/book_mom.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Mẹ làm gì có ước mơ</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('mom',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(17)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Vừa nhắm mắt, vừa mở cửa sổ</div>
                    <div class="panel-body text-center"><img src="./images/book_myeye.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Vừa nhắm mắt,mở cửa sổ</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('myeye',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(18)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Chúng ta rồi sẽ hạnh phúc...</div>
                    <div class="panel-body text-center"><img src="./images/book_happy.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Chúng ta rồi sẽ hạnh phúc...</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('happy',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(19)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Tạm biệt tôi của nhiều năm trước</div>
                    <div class="panel-body text-center"><img src="./images/book_goodbye.jpg" class="img-responsive"
                            alt="naruto"></div>
                    <div class="info_Product">
                        <p>Mã sản phẩm:ABC123</p>
                        <p>Tên sách: Tạm biệt tôi...</p>
                        <p>Giá: 150 USD</p>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        <p id="totalPrice">Total: $150</p>
                        <button class="add" onclick="addToCart('ABC123', 'Naruto', 150)">🛒</button>
                        <button id="show_order" onclick="showOrderForm('goodbye',150)">Mua</button>
                        <button id="show_info" onclick="showProductInfo(20)">Xem thông tin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="aboutus">
        <h1 style="border-bottom: 3px solid orange;">About Us</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Thông tin về cửa hàng sách</div>
                    <div class="panel-body text-center" id="info_text"><img id="img_about_us"
                            src="./images/background_aboutus.jpg" class="img-responsive" alt="naruto">Cửa hàng sách
                        BookStore MNG chuyên cung cấp những sản
                        phẩm chất
                        lượng phù hợp với mọi lứa tuổi mong muốn tìm hiểu về sách, cũng như là tín đồ cho những người
                        yêu thích sách có thể đọc thử quyển sách trước khi đưa ra quyết định có mua sản phẩm hay không.
                        Rất mong các bạn có thể góp ý, cũng như là ủng hộ những ý tưởng mới để shop có thể hoàn thiện và
                        phát triển hơn trong tương lại để phục vụ mọi người một cách tốt nhất
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>