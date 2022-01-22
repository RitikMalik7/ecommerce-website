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
                <img class="img-fluid w-100 pb-1" src="headphone/headphone2.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="headphone/headphone2a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="headphone/headphone2b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="headphone/headphone2c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">JBL Tune 750BTNC, Over Ear Active Noise Cancellation Headphones with Mic, 40mm Dynamic
                    Drivers, JBL Pure Bass, Dual Pairing, AUX & Voice Assistant Support for Mobile Phones (Black)</h3>
                <h5><strike>M.R.P.:₹9,499.00</strike></h5>
                <h4 class="mb-3">Price: ₹5,299.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            ACTIVE NOISE CANCELLING: Tune in to your music. Tune out the noise with JBL Tune 750BTNC
                            wireless headset.
                        </li>
                        <li>
                            BL PURE BASS SOUND: For over 70 years, JBL has engineered the precise, impressive sound
                            found in big venues around the world. These Bluetooth headphones reproduce that same JBL
                            sound, punching out bass that’s both deep and powerful.
                        </li>
                        <li>
                            WIRELESS BLUETOOTH STREAMING: Wirelessly stream high-quality music from your Bluetooth
                            devices without the messy cords.
                        </li>
                        <li>
                            DUAL PAIRING: Effortlessly switch between 2 Bluetooth devices with Multi-Point Connection
                        </li>
                        <li>
                            UP TO 22 HOURS BATTERY: Listen wirelessly for up to 15 hours with active noise cancelling or
                            up to 22 hours without noise cancelling for long-lasting fun. Recharge the battery quickly
                            in 2 hours or enjoy endlessly in wired mode, using the detachable cable provided.
                        </li>
                        <li>
                            MICROPHONE AND REMOTE FOR EASY MUSIC MANAGEMENT: Easily control your music, manage your
                            calls and triggle voice assistants from your headset with the buttons on your earcup.
                        </li>
                        <li>
                            Lightweight and Flat foldable design.
                        </li>
                        <li>
                            What's in the box : 1 unit of JBL TUNE 750BTNC Headphones, Charging cable, Detachable audio
                            cable, Quick Start Guide, Warning card, Warranty card and Safety Sheet
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