<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Paradise</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
    require "nav.php"
    ?>

    <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Price</span> This Year</h1>
            <p>Looking for the best prices? <br> You are at the correct place.</p>
            <button><a href="shop.php">Shop Now</a></button>
        </div>
    </section>

    <section id="brand" class="container">
        <div class="row m-0 py-2">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/apple.png" alt="Brand 1">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/razer.png" alt="Brand 2">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/alienware.png" alt="Brand 3">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/zebronics.png" alt="Brand 4">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/sennheiser.png" alt="Brand 5">
        </div>
    </section>

    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-3 col-md-12 col-12 p-0">
                <img class="img-fluid" src="laptop/laptop.jpg" alt="">
                <div class="details">
                    <h2>Laptop</h2>
                    <button class="text-uppercase"><a href="shop.php">Shop Now</a></button>
                </div>
            </div>
            <div class="one col-lg-3 col-md-12 col-12 p-0">
                <img class="img-fluid" src="headphone/headphone.jpg" alt="">
                <div class="details">
                    <h2>Headphone</h2>
                    <button class="text-uppercase"><a href="shop.php">Shop Now</a></button>
                </div>
            </div>
            <div class="one col-lg-3 col-md-12 col-12 p-0">
                <img class="img-fluid" src="mouse/mouse.jpg" alt="">
                <div class="details">
                    <h2>Mouse</h2>
                    <button class="text-uppercase"><a href="shop.php">Shop Now</a></button>
                </div>
            </div>
            <div class="one col-lg-3 col-md-12 col-12 p-0">
                <img class="img-fluid" src="keyboard/keyboard.jpg" alt="">
                <div class="details">
                    <h2>Keyboard</h2>
                    <button class="text-uppercase"><a href="shop.php">Shop Now</a></button>
                </div>
            </div>
    </section>

    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Products</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="laptop/laptop1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Macbook Pro</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹1,42,900.00</strike></h4>
                <h4 class="p-price"> Price: ₹1,31,900.00</h4>
                <button class="buy-btn"><a href="shop.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="headphone/headphone1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Sennheiser Headphone</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹14,990.00</strike></h4>
                <h4 class="p-price"> Price: ₹9,517.00</h4>
                <button class="buy-btn"><a href="shop.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mouse/gaming_mouse.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Gaming Mouse</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹2,895.00</strike></h4>
                <h4 class="p-price"> Price: ₹1,995.00</h4>
                <button class="buy-btn"><a href="shop.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="keyboard/gaming_keyboard.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Gaming Keyboard</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹2,599.00</strike></h4>
                <h4 class="p-price"> Price: ₹2,399.00</h4>
                <button class="buy-btn"><a href="shop.php">Buy Now</a></button>
            </div>
        </div>

    </section>

    <?php 
    require "footer.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>