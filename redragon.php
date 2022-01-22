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
                <img class="img-fluid w-100 pb-1" src="keyboard/keyboard3.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="keyboard/keyboard3a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="keyboard/keyboard3b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="keyboard/keyboard3c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">Redragon K551 RGB LED Backlit Wired Mechanical Gaming Keyboard with Numlock Keys for
                    Windows PC (Black, Blue Switches)</h3>
                <h5><strike>M.R.P.:₹4,490.00</strike></h5>
                <h4 class="mb-3">Price: ₹3,789.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            Gaming Keyboard: 104 Key Mechanical Gaming Keyboard with Custom Mechanical Switches(Cherry
                            Blue equivalent) designed for longevity with greater durability and responsiveness
                        </li>
                        <li>
                            Fast mechanical keys with medium resistance, precise actuation, audible click sound, and
                            tactile bump feedback
                        </li>
                        <li>
                            RGB Led illuminated keyboard comes with Double-shot injection molded keycaps offering
                            crystal clear uniform backlighting and lettering that doesn't scratch off; Featuring
                            rainbow, RGB colors, 5 different lighting modes, 5 backlight brightness levels, breathing
                            speed, user programmable RGB backlighting
                        </li>
                        <li>
                            Metal/ABS Construction: The PC Gaming keyboard is constructed of metal alloy and ABS with
                            plate-mounted mechanical keys and switches that stand up to tough gaming conditions
                        </li>
                        <li>
                            Comes with Full numeric keypad and a gold-plated corrosion free USB connector for a reliable
                            connection
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