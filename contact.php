<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Comatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E commerce</title>

    <!-- font awwsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awwsome CDN -->

    <title> E-commerce Website</title>

    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />


</head>

<body>
    <?php
    include "./templates/header.php";
    head("contact");
    ?>
    <section id="page-heder" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MASSAGE, We love to hear from you!</p>
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us todeay</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa fa-map"></i>
                    <p> Damitta_New-Damitta</p>

                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <p>abdsalama2020@gmail.com</p>

                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <p>+201097226802</p>

                </li>
                <li>
                    <i class="fa fa-clock"></i>
                    <p>10:00 -18:00, Sat - Thrus</p>

                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.5369898347108!2d31.653316924005534!3d31.426880474256993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e37db16b665d%3A0xc2109ef9742f11f3!2z2YPZhNmK2Kkg2KfZhNit2KfYs9io2KfYqiDZiNin2YTYsNmD2KfYoSDYp9mE2KfYtdi32YbYp9i52Ykg2KjYr9mF2YrYp9i3!5e0!3m2!1sar!2seg!4v1700502563393!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>we love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your E-mail">
            <input type="text" placeholder="Your Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="images/people/2.png" alt="">
                <p><span>Mahmmoud Elshiha</span>Senior Team Leader <br> phone: +201010580430 <br>E-mail: MahmmoudElsheiha@gmail.com</p>
            </div>

            <div>
                <img src="images/people/1.png" alt="">
                <p><span>Abdo Eltahrany</span>Senior Marketing Manger <br> phone: +201097226802 <br>E-mail: abdsalama2020@gmail.com</p>
            </div>
            <div>
                <img src="images/people/3.png" alt="">
                <p><span>Ahmed Elkhamisi</span>Senior Marketing Manger <br> phone: +201015282342 <br>E-mail: ahmed_elkhamisi@gmail.com</p>
            </div>
            <div>
                <img src="images/people/4.png" alt="">
                <p><span>Osama Elkayyal</span>Senior Marketing Manger <br> phone: +201552561497 <br>E-mail: osama_elkayyal@gmail.com</p>
            </div>
        </div>
    </section>




    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For newsletter</h4>
            <p>
                Get E-mail updates about our lestest shop and
                <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" />
            <button class="normal">Sign Up</button>
        </div>
    </section>
    <?php include "./templates/footer.php" ?>
</body>

</html>