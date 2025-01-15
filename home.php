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
    <style type="text/css">
        
#testimonial .testimonial-item {
    background: rgba(89, 50, 7, 0.7);
    margin-bottom: 30px;
    border-radius: 4px;
    margin-top: 70px;
    height: 350px;
}

#testimonial {

    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}

#testimonial .testimonial-item h3 {
    /*font-size: 22px;*/
    text-align: center;
    text-transform: capitalize;
    color: #d9d887;
    margin-top: 16px;
}

#testimonial .testimonial-item p {
    color: rgb(233, 212, 166);
    text-align: center;
    padding: 16px;
    height: 150px;
    /*font-size: 14px;*/
}
#testimonial .testimonial-item .testimonial-img
{
    text-align: center;

}
#testimonial .testimonial-item .testimonial-img>img
{
    border: 5px dotted #ccc;
    margin-top: -70px;
}
#testimonial .testimonial-item:hover .testimonial-img>img
{
    border: 10px solid #c2af7f;
}
#testimonial .owl-carousel .owl-item img {
   display: inline;
    width: 150px;
    height: 150px;
}
#testimonial .owl-carousel .owl-nav button.owl-prev,
#testimonial .owl-carousel .owl-nav button.owl-next
{
    background: #b58331;
    color: #fff;
    font-size: 24px;
    margin: 10px;
    padding: 0 12px 3px !important;

}
#testimonial .owl-carousel .owl-nav button.owl-dot
{
    display:none;
}

.owl-carousel .owl-nav.disabled
{
    display:block;
}
#testimonial .owl-theme .owl-nav
{
 padding-bottom:20px;
 margin-top: 0;
}
        .testimonial-link {
            text-decoration: none;            /* Remove underline */
            color: #343434;                   /* Set text color */
            text-transform: uppercase;        /* Convert text to uppercase */
            padding: 5px 10px;               /* Add padding */
            transition: background-color 0.3s, color 0.3s; /* Smooth transitions */
        }

        .testimonial-link:hover,
        .testimonial-link:focus {
            text-decoration: none;            /* Ensure no underline on hover/focus */
            color: #000;                      /* Optionally change color on hover/focus */
            background-color: #f8f9fa;        /* Optionally change background color on hover/focus */
        }
                  /* General Section Styles */
            #aboutus {
                position: relative; /* Ensure the section is the positioning context */
                background-image: url('img/banner/flower.jpeg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
                color: #fff;
                padding: 100px 0; /* Adjusted padding to accommodate background */
                min-height: 100vh;
                overflow: hidden; /* Ensure the overlay stays within the section */
                scroll-behavior: smooth;
            }

            /* Black Overlay */
            #aboutus::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6); /* Black overlay with 60% opacity */
                z-index: 1;
            }

            /* Content Container */
            #aboutus .container {
                position: relative;
                z-index: 2; /* Ensure the content is above the overlay */
            }

            /* Title Styles */
            .st-title {
                font-size: 2.5em;
                text-align: center;
                margin-bottom: 30px;
                color: #fff; 
                text-transform: uppercase;
                letter-spacing: 2px;

            }

            /* About Us Content Styles */
            .about-us {
                margin-top: 30px;
            }

            .aboutus-item {
                background-color: rgba(255, 255, 255, 0.15); 
                border-radius: 12px;
                padding: 25px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .aboutus-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            }

            /* Paragraph Styles */
            .aboutus-item p {
                font-size: 1.1em;
                line-height: 1.8;
                margin-bottom: 20px;
                color: #fff; /* Ensure text is visible */
            }

            /* Table Styles */
            #naming-table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
                background-color: rgba(255, 255, 255, 0.2); /* Lightened table background for visibility */
                margin-top: 30px;
                border-radius: 12px;
                overflow: hidden;
            }

            #naming-table th, #naming-table td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3); /* Adjusted border color for visibility */
                color: #fff; /* Ensure text is visible */
            }

            #naming-table th {
                background-color: rgba(0, 0, 0, 0.3); /* Darkened header background */
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            #naming-table tr:nth-child(even) {
                background-color: rgba(255, 255, 255, 0.1); /* Slightly transparent background for alternate rows */
            }

            #naming-table tr:hover {
                background-color: rgba(0, 0, 0, 0.2); /* Darkened hover effect */
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .aboutus-item {
                    padding: 20px;
                }

                #naming-table th, #naming-table td {
                    font-size: 1em;
                    padding: 10px;
                }

                .st-title {
                    font-size: 2em;
                }
            }

    </style>
</head>
<body>
 

    <header>
        <!-- Banner -->
        <section class="banner">
            <div id="banner">
                <!--header-->
                <div id="header">
                    <ul class="nav">
                        <li><a href="#home" class="select">Home</a></li>
                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="index.php">Service</a></li>
                        <li><a href="#testimonial">History</a></li>
                    </ul>
                </div>
                <!--end-->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/banner/image3.jpeg" class="d-block w-100" alt="first slide">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/banner/main.jpg" class="d-block w-100" alt="second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner/main2.jpg" class="d-block w-100" alt="third slide">
                        </div>
                    </div>
                    <div class="banner-caption">
                        <div class="first-text">
                            <img id="logo" src="img/bagan.png" alt="Logo">
                            <h1>Eternal Dynasty</h1>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="second-text">နာမည်လှလှလေးတွေပေးကြမယ်</div>
                        <!-- Form for redirection -->
                        <!-- Form for redirection -->
                        <form action="index.php" method="post">
                            <button type="submit" class="btn btn-primary">ဆက်ရန်</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- End Banner -->

    <!-- Testimonial -->
    <section id="testimonial" class="std-section">
        <div class="container">
            <h1 class="std-title">မြန်မာနိုင်ငံ၏ခေတ် ၄ ခေတ်</h1>
            <div class="owl-carousel owl-theme">
                <a href="bagan.php" class="testimonial-link">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/banner/anawrahta.jpeg" alt="testimonial_img"/>
                            </div>
                            <h3>ပထမ မြန်မာနိုင်ငံတော်ခေတ်</h3>
                            <p>
                                <q> 
                                    ပထမမြန်မာနိုင်ငံတော်ကို အနော်ရထာမင်း နန်းတက်ခဲ့သည့် ခရစ်နှစ် ၁၀၄၄ က စပြီး ရေတွက်သောကြောင့် လွန်ခဲ့သောနှစ်ပေါင်း ၉၇၆ ( ခရစ်နှစ်၂၀၂၀ - ၁၀၄၄= ၉၇၆ ) မှ စတင်ခဲ့ကြောင်း သမိုင်းအထောက်အထားများအရ အတည်ပြု မှတ်သားနိုင်သည်။ ပုဂံမင်း ၅၅ ဆက်အနက် ၄၂ ဆက်မြောက် မင်းဖြစ်သည်။ အနော်ရထာကား ပုဂံပြည့်ရှင် ကွမ်းဆော်မင်းဟုလည်းတွင်သော ကြောင်ဖြူမင်းနှင့် မိဖုရားမြောက်ပြင်သည်တို့မှ သက္ကရာဇ် ၃၇၆ ခုနှစ်တွင် ဖွားမြင်သောသားတော်တစ်ဦး ဖြစ်သည်။
                                </q>
                            </p>
                        </div>
                    </div>
                </a>
            <a href="second.php" class="testimonial-link">
                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/banner/2.jpeg" alt="testimonial_img"/>
                        </div>
                        <h3>ဒုတိယ မြန်မာနိုင်ငံတော်ခေတ်</h3>
                        <p>
                            <q> 
                                ဘုရင့်နောင်သည် (၁၅၁၆ - ၁၅၈၁)တပင်ရွှေထီး အစပျိုးခဲ့သည့် ဒုတိယ ပြည်ထောင်စုမြန်မာနိုင်ငံကြီး ကိုအောင်မြင်စွာ ဆက်လက်တည်ဆောက်နိုင်ခဲ့သည့် ဘုရင်တစ်ဦး ဖြစ်သည်။ ဦးကုလား၊ မှန်နန်းရာဇဝင် အစရှိသည့် ရာဇဝင်ကျမ်းများတွင် ဘုရင့်နောင်သည် မင်းဆွေမင်းမျိုးဖြစ်သည်ဟု ဆိုသော်လည်း မွန်၊ ရခိုင်နှင့် ယိုးဒယား တို့မှ ရာဇဝင်ကျမ်းများတွင်မူ သာမန်မျိုးရိုးမှ ဆင်းသက်သူဟုသာ ပြဆိုကြသည်။ မည်သို့ပင် ဖြစ်စေ ဘုရင့်နောင်သည် ၁၆ ရာစု အရှေ့တောင်အာရှသမိုင်းတွင် နာမည်အကျော်ကြားဆုံး ဘုရင်တစ်ဦးအဖြစ် လက်ခံထားကြသည်။
                            </q>
                        </p>
                    </div>
                </div>
            </a>
            <a href="third.php" class="testimonial-link">
                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/banner/3.jpeg" alt="testimonial_img"/>
                        </div>
                        <h3>တတိယ မြန်မာနိုင်ငံတော်ခေတ်</h3>
                        <p>
                            <q> 
                                အလောင်းမင်းတရား (ဝါ) အလောင်းဘုရား (ခရစ်နှစ် ၂၄ ဩဂုတ် ၁၇၁၄ - ၁၁ မေ ၁၇၆၀) ၏ အမည်ရင်းမှာ ဦးအောင်ဇေယျ ဖြစ်သည်။ ထီးနန်းမစိုးစံခင်အချိန်က မုဆိုးဖိုရွာ၏ ရွာသူကြီးဖြစ်ပြီး ကုန်းဘောင်မင်းဆက် တတိယမြန်မာဧကရာဇ်နိုင်ငံတော် ကို စည်းရုံးထူထောင်သောမင်း ဖြစ်သည်။
                                အလောင်းမင်းတရားသည် ရွှေဘိုမြို့မှအစပြုပြီး မြန်မာတနိုင်ငံလုံး သိမ်းပိုက်မင်းပြုခဲ့သည်။ ယခင်က ယိုးဒယားနိုင်ငံ၊ အယုဒ္ဓယကို သိမ်းယူရန်ချီတက်ခဲ့သော်လည်း မအောင်မြင်ဘဲ အပြန်ခရီးတွင် ကျောက်ရောဂါ (သို့) ဝမ်းရောဂါဖြင့် နတ်ရွာစံကွယ်လွန်ခဲ့သည်။
                            </q>
                        </p>
                    </div>
                </div>
            </a>
            <a href="fourth.php" class="testimonial-link">
                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/banner/4th.jpeg" alt="testimonial_img"/>
                        </div>
                        <h3>လွတ်လပ်ရေးခေတ်</h3>
                        <p>
                            <q> 
                                လွတ်လပ်ရေးခေတ်သည် ၁၉၄၈ ဇန်နဝါရီ ၄ ရက်မှ စတင်ခဲ့သည်။ မြန်မာနိုင်ငံလွတ်လပ်ရေး ခေါင်းဆောင်မှာ ဗိုလ်ချုပ်အောင်ဆန်းဖြစ်သော်လည်း လွတ်လပ်ရေး မရခင်တွင်ပဲ လုပ်ကြံခံခဲ့ရသည်။ထို့ကြောင့် လွတ်လပ်ရေး ရပြီး ပထမဆုံးသော မြန်မာနိုင်ငံ၏ သမ္မတမှာ ဦးစပ်ရွှေသိုက်(၁၉၄၈- ၁၉၅၂) ဖြစ်လာသည်။
                            </q>
                        </p>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->

    <!-- About Us -->
    <section id="aboutus" class="std-section">
        <div class="container">
            <h1 class="st-title">Eternal Dynasty ၏ အမည်ပေးပုံ</h1>
            <div class="about-us">
                <div class="item">
                    <div class="aboutus-item">
                        <div class="container">
                           

                            <p>နာမည်ဟူသည် လူတစ်ယောက် မွေးဖွားသည်မှစ၍ သေဆုံးပြီးသည့်တိုင် တွင်ကျန်စေနိုင်သည့် အရာဖြစ်သည်။ ထို့ကြောင့် မြန်မာတို့တွင်နာမည်ပေးကင်ပွန်းတပ်ခြင်းနဲ့ ပက်သက်ပြီး အယူအဆများ ကြီးတတ်ကြသည်။ အထူးသဖြင့် လူတစ်ယောက်သည် နာမည်နှင့်လိုက်ကာ ကံကြမ္မာပြောင်းလဲတတ်သည်ဟုလည်း ယုံကြည်လျက်ရှိသည်။</p>

                            <p>ဥပမာ - 
                            ဇွဲထက်( ဇွဲ ၊ လုံ့လ ဝီရိယ ရှိကာ ထက်မြက်စေရန်)၊
                            မေပြည့်စုံခင် =( မေ = မိန်းကလေးဆန်ပြီး ပြည့်စုံ ချမ်းသာကာ လူမှုဆက်ဆံရေး ကောင်းမွန်အဆင်ပြေစေရန်)</p>

                            <p>စသဖြင့် မိဘများက မိမိတို့၏ ရင်သွေးရတနာတို့အပေါ်  မျှော်လင့်ချက်များဖြင့် သင့်တင့်လျောက်ပတ်သောအမည်များ ပေးလျက်ရှိသည်။ ထို့ကြောင့် အမည်ပေးကင်ပွန်းတပ် မင်္ဂလာဟုပင် ကျင်းပကာ မိမိတို့၏ မြန်မာတို့၏ ရင်သွေးရတနာများ၏ နာမည်ပေးခြင်းများကို တခမ်းတနား လုပ်လေ့ရှိသည်။ မြန်မာတို့၏ အမည်ပေးခြင်းသည်လည်း ခေတ်အလိုက် ပြောင်းလဲလျက်ရှိရာ အပေါ်က အကြောင်းရာများတွင် အသေးစိတ် လေ့လာဖတ်ရှုနိုင်ပါသည်။</p>

                            <p>ယခု Eternal Dynasty တွင်မူ မြန်မာ့ရိုးရာ ဗေဒင်ပညာအရ နာမည်ပေးခြင်းဓလေ့ထုံးတမ်းကို အခြေခံထားသောနာမည်များကို ရယူနိုင်ပါသည်။ ယင်းဗေဒင်ပညာအရ သောကြာနေ့မှာ မွေးဖွားသောသူကို ‘ သ’ သို့မဟုတ် ‘ဟ’ ဖြင့်စ၍ နာမည်ပေးခြင်းပင်ဖြစ်သည်။ ထိုသို့ မွေးနေ့နံအလိုက် အမည်ပေးခြင်းမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်။</p>

                            <table id="naming-table" class="transparent-table">
                                <tr>
                                    <th>နေ့ရက်</th>
                                    <th>အက္ခရာ</th>
                                </tr>
                                <tr>
                                    <td>တနလ်ာ</td>
                                    <td>က ၊ခ ၊ ဂ ၊ ဃ၊ င</td>
                                </tr>
                                <tr>
                                    <td>အင်္ဂါ</td>
                                    <td>စ၊ ဆ၊ ဇ၊ စျ၊ ည</td>
                                </tr>
                                <tr>
                                    <td>ဗုဒ္ဓဟူး</td>
                                    <td>ယ၊ ရ ၊လ၊ ဝ</td>
                                </tr>
                                <tr>
                                    <td>ကြာသပတေး</td>
                                    <td>ပ၊ ဖ၊ ဘ၊ဗ၊ မ</td>
                                </tr>
                                <tr>
                                    <td>သောကြာ</td>
                                    <td>သ၊ ဟ </td>
                                </tr>
                                <tr>
                                    <td>စနေ</td>
                                    <td>တ၊ ထ၊ ဒ၊ ဓ၊ ဍ ၊န ၊ ဌ၊ ဏ</td>
                                </tr>
                                <tr>
                                    <td>တနင်္ဂနွေ</td>
                                    <td>အ၊ ဥ၊ ဩ ၊ ဧ</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

  
    <!-- Optional JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="library/owl-carousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
