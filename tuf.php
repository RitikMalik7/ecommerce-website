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
                <img class="img-fluid w-100 pb-1" src="laptop/laptop2.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop2a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop2b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop2c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">ASUS TUF Dash F15 (2021) 15.6" (39.62 cm) FHD 240Hz/3ms, Intel Core i7-11370H, GeForce
                    RTX 3060 6GB Graphics, Gaming Laptop (16GB RAM/1TB SSD/Office 2019/Windows 10 Home/Gray/2 Kg)
                    FX516PM-AZ153TS</h3>
                <h5><strike>M.R.P.:₹1,61,990.00</strike></h5>
                <h4 class="mb-3">Price: ₹1,28,990.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            Free upgrade to Windows 11 when available. Disclaimer-Upgrade rollout plan is being
                            finalized and is scheduled to begin late in 2021 and continue into 2022. Specific timing
                            will vary by device
                        </li>
                        <li>
                            Processor: 11th Gen Intel Core i7-11370H, 4 cores , 8 Threads, 12M Cache, 3.3 GHz Base
                            Speed, Up to 4.8GHz Turbo Boost Speed
                        </li>
                        <li>
                            Access to over 100 high-quality PC games on Windows 10
                        </li>
                        <li>
                            One-month subscription to Xbox Game Pass that’s included with the purchase of your device
                        </li>
                        <li>
                            Memory & Storage: 16GB (8GB onboard + 8GB SO-DIMM) DDR4-3200MHz RAM, Upgradeable Up to 24GB
                            Using 1x SO-DIMM | Storage: 1TB SSD M.2 NVMe PCIe 3.0 with Additional M.2 Slot
                        </li>
                        <li>
                            Graphics: Dedicated NVIDIA GeForce RTX 3060 GDDR6 6GB VRAM, With ROG Boost Up to 1525MHz at
                            80W + 5W with Dynamic Boost
                        </li>
                        <li>
                            Display: 15.6-inch, FHD (1920 x 1080) 16:9 300nits, IPS-level, Refresh Rate: 240Hz/3ms,
                            Anti-Glare display, sRGB: 100%, Adobe: 75.35%, with Adaptive-Sync
                        </li>
                        <li>
                            Operating System: Pre-loaded Windows 10 Home with lifetime validity | Software Included:
                            Pre-installed Office Home and Student 2019 with Lifetime validity
                        </li>
                        <li>
                            Cooling: 4 Fan outlets | 83-Blade Fans | Self-Cleaning Cooling | 5 Heatpipes
                            CPU/GPU/VRM/VRAM
                        </li>
                        <li>
                            I/O Port: 1x RJ45 LAN port, 1x USB 4 Type C Thunderbolt 4 with Power Delivery and Display
                            Port 1.4 Support, 3x USB 3.2 Gen 1 Type-A| 1x 3.5mm Combo Audio Jack, 1x HDMI 2.0b |Other:
                            Backlit Keyboard | 1.7mm Key Travel | Wi-Fi 6(802.11ax)+Bluetooth 5.1 (Dual band) 2*2 | 2x
                            2W speaker | Built-in array microphone | No Webcam | MIL-STD-810H standard Durability
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