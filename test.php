<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$names_content = '';
$result_message = '';

if (isset($_POST['btnSubmit'])) {
    // Sanitize and validate inputs
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $day_of_week = date('l', strtotime($dob));

    if (!empty($dob) && !empty($gender)) {
        ob_start(); // Start output buffering

        switch ($day_of_week) {
            case "Monday":
                if ($gender == "female") {
                    include 'Monday_girl.php';
                } elseif ($gender == "male") {
                    include 'Monday_boy.php';
                }
                break;
            case "Tuesday":
                if ($gender == "female") {
                    include 'Tuesday_girl.php';
                } elseif ($gender == "male") {
                    include 'Tuesday_boy.php';
                }
                break;
            case "Wednesday":
                if ($gender == "female") {
                    include 'Wed_girl.php';
                } elseif ($gender == "male") {
                    include 'Wed_boy.php';
                }
                break;
            case "Thursday":
                if ($gender == "female") {
                    include 'Thu_girl.php';
                } elseif ($gender == "male") {
                    include 'Thu_boy.php';
                }
                break;
            case "Friday":
                if ($gender == "female") {
                    include 'Fri_girl.php';
                } elseif ($gender == "male") {
                    include 'Fri_boy.php';
                }
                break;
            case "Saturday":
                if ($gender == "female") {
                    include 'Sat_girl.php';
                } elseif ($gender == "male") {
                    include 'Sat_boy.php';
                }
                break;
            case "Sunday":
                if ($gender == "female") {
                    include 'Sun_girl.php';
                } elseif ($gender == "male") {
                    include 'Sun_boy.php';
                }
                break;
            default:
                $result_message = "This feature is only available for specific days.";
                break;
        }

        $names_content = ob_get_clean(); // Get the content from included files
    } else {
        $result_message = "Please provide both gender and date of birth.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Dynasty</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="library/fontawesome/css/all.css">
    <link rel="stylesheet" href="library/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="library/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .title-caption h1{
            width: 100%;
            text-align: center;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center vertically and horizontally */
            padding: 10px 0;
            z-index: 5;
            color: rgb(244, 234, 167); /* Ensure text is readable */
            margin: 0;
            font-family: "Playwrite CU", cursive;
            font-size: 4em;
            margin-left: -2px;
            margin-bottom: 0px;
        }
         
        .title-caption h1{
            width: 100%;
            text-align: center;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center vertically and horizontally */
            padding: 10px 0;
            z-index: 5;
            color: rgb(244, 234, 167); /* Ensure text is readable */
            margin: 0;
            font-family: "Playwrite CU", cursive;
            font-size: 4em;
            margin-left: -2px;
            margin-bottom: 0px;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('img/banner/bg.jpeg') no-repeat center center;
            background-size: cover;
            z-index: 1;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            z-index: 3;
            padding: 20px;
        }

        .spe{
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: rgba(212, 202, 178, 0.9);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            z-index: 4;
        }

        .spe label {
            margin-bottom: 10px;
        }

        .gender-options {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .gender-options input {
            margin-right: 5px;
        }

        .gender-options label {
            margin-right: 15px;
        }


   

        .button-container {
            margin-top: 20px;
            text-align: center;
        }


    </style>
</head>
<body>
    <div id="header">
        <ul class="nav">
            <li><a href="home.php" class="select">Home</a></li>
            <li><a href="home.php#aboutus">About Us</a></li>
            <li><a href="index.php">Service</a></li>
            <li><a href="home.php#testimonial">History</a></li>
        </ul>
    </div>

    <div class="background"></div>
    <div class="overlay"></div>

    <div class="container">
        <div class="title-caption">
            <h1>Eternal Dynasty</h1>
        </div>
        <form action="result.php" method="post" class="spe">
            <label for="gender"><b>မြန်မာနာမည် လှလှလေးတွေ ရွေးကြမယ်</b></label><br>
            <div class="gender-options">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">ယောက်ျားလေး</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">မိန်းကလေး</label>
            </div><br>
        
            <label for="dob">မွေးနေ့ကို ရွေးပေးပါ</label><br>
            <input type="date" id="dob" name="dob"><br>
            <input type="submit" name="btnSubmit" value="ရွေးမည်" class="btn btn-primary mt-3">
        </form>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {


        // Attach form submit event listener for validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(event) {
                const gender = document.querySelector('input[name="gender"]:checked');
                const dob = document.getElementById('dob').value;

                if (!gender || !dob) {
                    event.preventDefault(); // Prevent form submission
                    alert("မွေးနေ့ နှင့် ကျား/မ ရွေးပေးပါ");
                }
            });
        }
    });

 
</script>


    <!-- Optional JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="library/owl-carousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
</body>
</html>