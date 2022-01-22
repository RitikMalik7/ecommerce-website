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

    <link type="text/css" href="CSS/main.css" rel="stylesheet" />

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
                <img class="img-fluid w-100 pb-1" src="laptop/laptop1.jpg" alt="">

                <div class="img-grp">
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop1a.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop1b.jpg" width="100%" alt="">
                    </div>
                    <div class="img-col">
                        <img class="small-img" src="laptop/laptop1c.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">2020 Apple MacBook Pro (13.3-inch/33.78 cm, Apple M1 chip with 8-core CPU and 8-core
                    GPU, 8GB RAM, 512GB SSD) - Space Grey</h3>
                <h5><strike>M.R.P.:₹1,42,900.00</strike></h5>
                <h4 class="mb-3">Price: ₹1,31,900.00</h4>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-5 mb-5">About This Item</h4>
                <span>
                    <ul>
                        <li>
                            Apple-designed M1 chip for a giant leap in CPU, GPU, and machine learning performance
                        </li>
                        <li>
                            Go longer than ever with up to 18 hours of battery life
                            8-core CPU delivers up to 3.5x faster performance to tackle projects faster than ever
                        </li>
                        <li>
                            Up to eight GPU cores with up to 5x faster graphics for graphics-intensive apps and
                            games
                        </li>
                        <li>
                            16-core Neural Engine for advanced machine learning
                        </li>
                        <li>
                            8GB of unified memory so everything you do is fast and fluid
                        </li>
                        <li>
                            Superfast SSD storage launches apps and opens files in an instant
                        </li>
                        <li>
                            Fanless design for silent operation
                        </li>
                        <li>
                            33.78cm (13.3-inch) Retina display with P3 wide color for vibrant images and incredible
                            detail
                        </li>
                        <li>
                            FaceTime HD camera with advanced image signal processor for clearer, sharper video
                            calls
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