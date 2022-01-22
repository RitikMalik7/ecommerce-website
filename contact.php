<?php 

if(isset($_POST['email']))
{

$server = "localhost";
$user = "root";
$pass = "";
$database = "ecom";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Message`) VALUES ('$name',  '$email', '$phone', '$message');";

if($conn->query($sql)== true){
  echo "<script>alert('Query Submitted.')</script>";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
}

require "nav.php"

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">


    <style>
        .wrapper {
            width: 80%;
            background: #fff;
            border-radius: 5px;
            margin-top: 90px;
            margin-left: 10%;
        }

        .wrapper h1 {
            font-size: 26px;

            padding: 2% 42%;
            text-decoration: underline;

        }

        .wrapper h4 {
            padding: 0 41%;
        }

        .wrapper form {
            margin: 35px 30px;
        }

        .wrapper form.disabled {
            pointer-events: none;
            opacity: 0.7;
        }

        form .dbl-field {
            display: flex;
            margin-bottom: 25px;
            justify-content: space-between;
        }

        .dbl-field .field {
            height: 50px;
            display: flex;
            position: relative;
            width: calc(100% / 2 - 13px);
        }

        .wrapper form i {
            position: absolute;
            top: 50%;
            left: 18px;
            color: #ccc;
            font-size: 17px;
            pointer-events: none;
            transform: translateY(-50%);
        }

        form .field input,
        form .message textarea {
            width: 100%;
            height: 100%;
            outline: none;
            padding: 0 18px 0 48px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .field input::placeholder,
        .message textarea::placeholder {
            color: black;
        }

        .field input:focus,
        .message textarea:focus {
            padding-left: 47px;
            border: 2px solid;
        }

        .field input:focus~i,
        .message textarea:focus~i {
            color: black;
        }

        form .message {
            position: relative;
        }

        form .message i {
            top: 30px;
            font-size: 10px;
        }

        form .message textarea {
            min-height: 130px;
            max-height: 130px;
            max-width: 100%;
            min-width: 100%;
            padding: 15px 20px 0 48px;
        }

        form .message textarea::-webkit-scrollbar {
            width: 0px;
        }

        .message textarea:focus {
            padding-top: 14px;
        }

        form .button-area {
            margin: 25px 0;
            display: flex;
            align-items: center;
        }

        .button-area button {
            color: #fff;
            border: none;
            outline: none;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            padding: 13px 25px;
            background: black;
            transition: background 0.3s ease;
        }

        .button-area button:hover {
            background: #78cf78;
        }

        .button-area span {
            font-size: 17px;
            margin-left: 30px;
            display: none;
        }

        @media (max-width: 600px) {
            .wrapper header {
                text-align: center;
            }

            .wrapper form {
                margin: 35px 20px;
            }

            form .dbl-field {
                flex-direction: column;
                margin-bottom: 0px;
            }

            form .dbl-field .field {
                width: 100%;
                height: 45px;
                margin-bottom: 20px;
            }

            form .message textarea {
                resize: none;
            }

            form .button-area {
                margin-top: 20px;
                flex-direction: column;
            }

            .button-area button {
                width: 100%;
                padding: 11px 0;
                font-size: 16px;
            }

            .button-area span {
                margin: 20px 0 0;
                text-align: center;
            }
        }
    </style>

</head>

<body>




    <div class="wrapper">
        <h1><b>GET IN TOUCH</b></h1>
        <h4>Write to us about your query.</h4>
        <form method="post">

            <div class="dbl-field">

                <div class="field">
                    <input type="text" name="name" placeholder="Enter your name">
                    <i class='fas fa-user'></i>
                </div>

                <div class="field">
                    <input type="text" name="email" placeholder="Enter your email">
                    <i class='fas fa-envelope'></i>
                </div>


                <div class="field">
                    <input type="text" name="phone" placeholder="Enter your phone">
                    <i class='fas fa-phone-alt'></i>
                </div>

            </div>

            <div class="message">
                <textarea placeholder="Write your message" name="message"></textarea>

            </div>
            <div class="button-area">
                <button type="submit">Send Message</button>
                <span></span>
            </div>
        </form>
    </div>


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