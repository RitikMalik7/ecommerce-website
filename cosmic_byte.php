<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

    <style>
        .img-grp {
            display: flex;
            justify-content: space-between;
        }

        .img-col {
            flex-basis: 33%;
            cursor: pointer;

        }

        .img-col img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .buy-btn {
            background: #78cf78;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>
</head>

<body>

    <?php 
    require "nav.php"
    ?>

    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="mouse/mouse2.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse2a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse2b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse2c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">Cosmic Byte Hyperion Wireless + Wired Dual Mode Gaming Mouse, Rechargeable, 1000Hz,
                    Pixart 3325 Sensor, RGB LED, Software, Upto 10000 DPI (Black)</h3>
                <h5><strike>M.R.P.:???1,999.00</strike></h5>
                <h4 class="mb-3">Price: ???1,746.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            HIGH PRECISION PROGRAMMABLE GAMING MOUSE: Fully Programmable 6 Buttons, built-in PIXART 3325
                            gaming-grade optical sensor with 10,000 DPI, 100 IPS, 20G acceleration that brings higher
                            precision and speed.
                        </li>
                        <li>
                            WIRED & WIRELESS DUAL MODEL: Wired/Wireless (2.4G) dual mode gaming mouse, Type-C pluggable
                            braided cable. 10 metres wireless range Rechargeable 600mAh Lithium Battery
                        </li>
                        <li>
                            ADJUSTABLE DPI: Switch the DPI between 200 to 10000 to adjust mouse responsiveness, you can
                            easily change the cursor sensitivity to meet your various needs. Adjustable 6-level DPI
                            precisely senses every slight movement.
                        </li>
                        <li>
                            LIGHT MODE: 16.8 million true RGB colour illumination with lighting effects that can be
                            customized based on your personal preference.
                        </li>
                        <li>
                            POLLING RATE: Adjust polling rate through software between 125Hz to 1000Hz. MACRO: Assign
                            Macro functions to buttons using the mouse software. LIGHTWEIGHT: At just 96 grams you can
                            flick and shoot faster. SWITCHES: Huano 10M Switches for excellent performance that will
                            last you a lifetime.
                        </li>
                    </ul>
                </span>
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