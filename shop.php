<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <?php 
    require "nav.php"
    ?>

    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2>Laptop</h2>
            <hr>
        </div>
        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="laptop/laptop1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> 2020 Apple MacBook Pro (13.3-inch/33.78 cm, Apple M1 chip with 8-core CPU and 8-core
                    GPU, 8GB RAM, 512GB SSD) - Space Grey</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹1,42,900.00</strike></h4>
                <h4 class="p-price"> Price: ₹1,31,900.00</h4>
                <button class="buy-btn"><a href="macbook.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="laptop/laptop2.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> ASUS TUF Dash F15 (2021) 15.6" (39.62 cm) FHD 240Hz/3ms, Intel Core i7-11370H,
                    GeForce RTX 3060 6GB Graphics, Gaming Laptop (16GB RAM/1TB SSD/Office 2019/Windows 10 Home/Gray/2
                    Kg) FX516PM-AZ153TS</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹1,61,990.00</strike></h4>
                <h4 class="p-price"> Price: ₹1,28,990.00</h4>
                <button class="buy-btn"><a href="tuf.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="laptop/laptop3.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> MSI GF75 Thin, Intel i5-10300H, 17.3" FHD IPS-Level 144Hz Panel Laptop (8GB/512GB
                    NVMe SSD/Windows 10 Home/Nvidia GTX1650 4GB GDDR6/Black/2.2Kg), 10SC-095IN</h5>
                <h4 class="p-price"> <strike>M.R.P.: ₹82,990.00</strike></h4>
                <h4 class="p-price"> Price: ₹64,990.00</h4>
                <button class="buy-btn"><a href="msi.php">Buy Now</a></button>
            </div>
        </div>

    </section>


    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2>Headphone</h2>
            <hr>
        </div>
        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="headphone/headphone1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Sennheiser HD 458 BT Over Ear Wireless Headphones with Active Noise Cancellation
                    Headphone</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹14,990.00</strike></h4>
                <h4 class="p-price"> Price: ₹9,517.00</h4>
                <button class="buy-btn"><a href="sennheiser.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="headphone/headphone2.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">JBL Tune 750BTNC, Over Ear Active Noise Cancellation Headphones with Mic, 40mm
                    Dynamic Drivers, JBL Pure Bass, Dual Pairing, AUX & Voice Assistant Support for Mobile Phones
                    (Black)</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹9,499.00</strike></h4>
                <h4 class="p-price"> Price: ₹5,299.00 </h4>
                <button class="buy-btn"><a href="jbl.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="headphone/headphone3.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> HyperX Cloud Core with 7.1 Wired Gaming Headset for PC, PS4, Xbox One, Nintendo
                    Switch, and Mobile Devices (HX-HSCC-2-BK/WW), Black</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹8,490.00</strike></h4>
                <h4 class="p-price"> Price: ₹6,690.00</h4>
                <button class="buy-btn"><a href="hyperx.php">Buy Now</a></button>
            </div>
        </div>

    </section>


    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2>Mouse</h2>
            <hr>
        </div>
        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mouse/mouse1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Logitech G402 Hyperion Fury Wired Gaming Mouse, 4,000 DPI, Lightweight, 8
                    Programmable Buttons, Compatible with PC/Mac - Black</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹2,895.00</strike></h4>
                <h4 class="p-price"> Price: ₹1,995.00</h4>
                <button class="buy-btn"><a href="logitech.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mouse/mouse2.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Cosmic Byte Hyperion Wireless + Wired Dual Mode Gaming Mouse, Rechargeable, 1000Hz,
                    Pixart 3325 Sensor, RGB LED, Software, Upto 10000 DPI (Black)</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹1,999.00</strike></h4>
                <h4 class="p-price"> Price: ₹1,746.00</h4>
                <button class="buy-btn"><a href="cosmic_byte.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="mouse/mouse3.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Razer Basilisk Ultimate Wireless Gaming Mouse with Charging Dock | 11 Programmable
                    Buttons | 20,000 DPI Optical Sensor - Chroma RGB Lighting - Classic Black - RZ01-03170100-R3A1</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹16,499.00</strike></h4>
                <h4 class="p-price"> Price: ₹12,702.00</h4>
                <button class="buy-btn"><a href="razer_mouse.php">Buy Now</a></button>
            </div>
        </div>

    </section>


    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2>Keyboard</h2>
            <hr>
        </div>
        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="keyboard/keyboard1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Zebronics ZEB-KM2100 Multimedia USB Keyboard Comes with 114 Keys Including 12
                    Dedicated Multimedia Keys & with Rupee Key</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹399.00</strike></h4>
                <h4 class="p-price"> Price: ₹329.00</h4>
                <button class="buy-btn"><a href="zebronics.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="keyboard/keyboard2.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Razer BlackWidow V3 Pro - Wireless Mechanical Gaming Keyboard (Yellow Switch) -
                    RZ03-03531700-R3M1</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹32,490</strike></h4>
                <h4 class="p-price"> Price: ₹29,999.00</h4>
                <button class="buy-btn"><a href="razer_keyboard.php">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="keyboard/keyboard3.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"> Redragon K551 RGB LED Backlit Wired Mechanical Gaming Keyboard with Numlock Keys for
                    Windows PC (Black, Blue Switches)</h5>
                <h4 class="p-price"> <strike>M.R.P.:₹4,490.00</strike></h4>
                <h4 class="p-price"> Price: ₹3,789.00</h4>
                <button class="buy-btn"><a href="redragon.php">Buy Now</a></button>
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