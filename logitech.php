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
                <img class="img-fluid w-100 pb-1" src="mouse/mouse1.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse1a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse1b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="mouse/mouse1c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">Logitech G402 Hyperion Fury Wired Gaming Mouse, 4,000 DPI, Lightweight, 8 Programmable
                    Buttons, Compatible with PC/Mac - Black</h3>
                <h5><strike>M.R.P.:₹2,895.00</strike></h5>
                <h4 class="mb-3">Price: ₹1,995.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            HIGH SPEED TRACKING : Fusion engine delivers one of the highest gaming mouse tracking speeds
                            of up to 500 IPS. Requirements : Windows 8, Windows 8.1, Windows 7 or Windows Vista. Length
                            Cable: 2.1 m
                        </li>
                        <li>
                            8 PROGRAMMABLE BUTTONS : Customise your Logitech wired gaming mouse and enjoy default
                            configuration straight out of the box or set up one-button triggers personal to you and save
                            them to your G402 USB gaming mouse
                        </li>
                        <li>
                            ON-THE-FLY DPI : Shift through up to four DPI settings, from pixel-precise targeting (250
                            DPI) to lightning-fast manoeuvres (4000 DPI)
                        </li>
                        <li>
                            ADVANCED RESPONSE RATE : They will be communicated to the game at the highest possible speed
                        </li>
                        <li>
                            COMFORTABLE DESIGN : Lightweight materials, rubber grips and low friction feet help ensure
                            that your gaming sessions last as long as you can
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