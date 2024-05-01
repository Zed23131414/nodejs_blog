<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Product Info Modal -->
    <div class="modal fade" id="productInfoModal" tabindex="-1" role="dialog" aria-labelledby="productInfoModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="productInfoModalLabel">Thông tin sản phẩm</h4>
                </div>
                <div class="modal-body" id="productInfoContent">
                    <!-- Product information goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="readSample()">Đọc thử</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and your JavaScript functions -->
    

    <script>
    // Example product data
    const products = {
        1: {
            name: 'Naruto',
            description: 'Naruto là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_naruto1.jpg'
        },
        2: {
            name: 'Dragon Ball',
            description: 'Dragon Ball là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_DB1.jpg'
        },
        3: {
            name: 'Blue Block',
            description: 'Blue Block là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_blueblock.jpg'
        },
        4: {
            name: 'One Piece',
            description: 'One Piece là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_OP1.jpg'
        },
        5: {
            name: 'Black Clover',
            description: 'Black Clover là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_blackclover.jpg'
        },
        6: {
            name: 'Dr Stone',
            description: 'Dr Stone là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_drstone.jpg'
        },
        7: {
            name: 'Grim Gap',
            description: 'Grim Gap là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_grimgar.jpg'
        },
        8: {
            name: 'Eighty Six',
            description: 'Eighty Six là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_eightysix.jpg'
        },
        9: {
            name: 'Over Lord',
            description: 'Overlord là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_overlord.jpg'
        },
        10: {
            name: 'Kimetsu no yaiba',
            description: 'Kimetsu no yaiba là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_kimetsu.jpg'
        },
        11: {
            name: 'My hero academia',
            description: 'MHA là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_MHA.jpg'
        },
        12: {
            name: 'Eighty Six',
            description: 'Eighty Six là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_jujutsukaisen1.jpg'
        },
        13: {
            name: 'Nhà giả kim',
            description: 'Nhà giảm kim là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_giakim.jpg'
        },
        14: {
            name: 'Hai số phận',
            description: 'Hai số phận là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_twopeople.jpg'
        },
        15: {
            name: 'Stars',
            description: 'Stars là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_stars.jpg'
        },
        16: {
            name: 'Pháp Y',
            description: 'Eighty Six là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_phapy.jpg'
        },
        17: {
            name: 'Mẹ làm gì có ước mơ',
            description: 'Mẹ làm gì có ước mơ là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_mom.jpg'
        },
        18: {
            name: 'Vừa nhắm mắt, vừa mở cửa sổ',
            description: 'Eighty Six là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_myeye.jpg'
        },
        19: {
            name: 'Chúng ta rồi sẽ hạnh phúc với những cách khác nhau',
            description: 'Chúng ta rồi sẽ hạnh phúc với những cách khác nhau là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_happy.jpg'
        },
        20: {
            name: 'Tạm biệt tôi của những năm về trước',
            description: 'Tạm biệt tôi của những năm về trước là một loạt truyện tranh Nhật Bản',
            price: 150,
            image: './images/book_goodbye.jpg'
        }


        // Add more products as needed
    };

    function showProductInfo(productId) {
        // Get the modal content element
        var modalContent = document.getElementById('productInfoContent');

        // Get product information based on the provided ID
        var product = products[productId];

        // Construct the HTML for product information
        var productInfoHTML = `
            <img src="${product.image}" class="img-responsive" alt="${product.name}">
            <p><strong>Tên sản phẩm:</strong> ${product.name}</p>
            <p><strong>Mã sản phẩm:</strong> ${generateProductCode()}</p>
            <p><strong>Mô tả:</strong> ${product.description}</p>
            <p><strong>Số lượng chap truyện:</strong> 20</p>
            <p><strong>Giá cả:</strong> ${product.price} VND</p>
        `;

        // Set the HTML content of the modal
        modalContent.innerHTML = productInfoHTML;

        // Show the modal
        $('#productInfoModal').modal('show');
    }

    function readSample() {
        // Add your logic for reading a sample here
        alert('Reading sample...');
    }

    function generateProductCode() {
        // Add your logic for generating a product code here
        return 'ABC123';
    }
    </script>
</body>

</html>