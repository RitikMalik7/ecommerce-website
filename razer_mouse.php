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
                <img class="img-fluid w-100 pb-1" src="mouse/mouse3.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse3a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse3b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse3c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">Razer Basilisk Ultimate Wireless Gaming Mouse with Charging Dock | 11 Programmable
                    Buttons | 20,000 DPI Optical Sensor - Chroma RGB Lighting - Classic Black - RZ01-03170100-R3A1</h3>
                <h5><strike>M.R.P.:₹16,499.00</strike></h5>
                <h4 class="mb-3">Price: ₹12,702.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            25% Faster Than Competing Wireless Mice: The all-new, Razer HyperSpeed wireless technology
                            brings together extreme low-latency and interference reduction for true wireless freedom
                        </li>
                        <li>
                            Quicker Than Traditional Mechanical Switches- optical mouse switches uses light beam-based
                            actuation, registering button presses at the speed of light for complete immersion and
                            absolute control
                        </li>
                        <li>
                            Customizable Chroma Lighting & RGB Mouse Charging Dock: Features 16.8 million color
                            combinations w/ included preset profiles; provides 5 hours of wireless playtime within 10
                            minutes of charging
                        </li>
                        <li>
                            11 Programmable Buttons: Allows for reconfiguration and assignment of complex macro
                            functions through Razer Synapse 3. On-The-Fly Sensitivity Adjustment (Default stages :
                            800/1800/4000/9000/20000)
                        </li>
                        <li>
                            Up to 100 Hour Battery Life: An all-new, hyper-efficient sensor and wireless technology
                            allows for extended gaming
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