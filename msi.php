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
                <img class="img-fluid w-100 pb-1" src="laptop/laptop3.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop3a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop3b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop3c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">MSI GF75 Thin, Intel i5-10300H, 17.3" FHD IPS-Level 144Hz Panel Laptop (8GB/512GB NVMe
                    SSD/Windows 10 Home/Nvidia GTX1650 4GB GDDR6/Black/2.2Kg), 10SC-095IN</h3>
                <h5><strike>M.R.P.:₹1,42,900.00</strike></h5>
                <h4 class="mb-3">Price: ₹1,31,900.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            Processor: 10th Generation Intel Core i5-10300H Up To 4.5 GHz
                        </li>
                        <li>
                            "Operating System: Pre-loaded Windows 10 Home with lifetime validity |Preinstalled Software:
                            MSI BurnRecovery, MSI Battery Calibration, MSI Help Desk, Norton Internet Security (trail
                            60days) Norton Studio (Metro) (permanent free), Nvidia GeForce Experience, Nahimic 3, Dragon
                            Center | In the box: Laptop, adapter"
                        </li>
                        <li>
                            Display: 17.3" FHD (1920*1080), IPS-Level 144Hz Thin Bezel, 45% NTSC
                        </li>
                        <li>
                            Memory & Storage: 8 GB DDR4 3200MHz RAM, expandable to 64 GB | Storage: 512GB NVMe SSD.
                        </li>
                        <li>
                            NVIDIA GeForce GTX1650 GDDR6 4GB Dedicated Graphics
                        </li>
                        <li>
                            Superfast SSD storage launches apps and opens files in an instant
                        </li>
                        <li>
                            Keyboard: Steelseries RED Backlit Keyboard | Camera: HD type (30fps@720p) | Microphone:
                            Built-in microphone
                        </li>
                        <li>
                            1x Type-C USB3.2 Gen1, 3x Type-A USB3.2 Gen1, 1x RJ45, 1x (4K @ 30Hz) HDMI
                        </li>
                        <li>
                            This genuine MSI laptop comes with 2 year Carry-in warranty from MSI covering manufacturing
                            defects and not covering physical damage, burn, liquid damage. For more details visit MSI
                            India Website
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