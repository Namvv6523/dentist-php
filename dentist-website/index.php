<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date =  $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name,email,number,date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully!';
    }else{
        $message[] = 'appointment failed';
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link cdnjs font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- link bootstrap cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />

    <!-- link style -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!-- header section start -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">dental <span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">make appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section end -->


    <!-- home section start -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam porro odio harum aliquid debitis perferendis!</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->


    <!-- about section starts -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="./img/about-img.jpg" alt="" class="w-100 mb-5 mb-md-0">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Helthcare For Your Family </h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Blanditiis illo veritatis hic eos quo mollitia nesciunt ratione dolor non natus, obcaecati eligendi sapiente necessitatibus neque eaque voluptas repellat accusantium doloribus.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- services section starts -->
    <section class="services" id="services">
        <h1 class="heading">our services</h1>

        <div class="box-container container">
            <div class="box">
                <img src="./img/icon-1.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/icon-2.svg" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/icon-3.svg" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/icon-4.svg" alt="">
                <h3>Root Canal</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/icon-5.svg" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/icon-6.svg" alt="">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>
        </div>
    </section>
    <!-- services section end -->


    <!-- process section start -->
    <section class="process" id="process">
        <h1 class="heading">work process</h1>

        <div class="box-container container">
            <div class="box">
                <img src="./img/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/process-2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>

            <div class="box">
                <img src="./img/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, corrupti.</p>
            </div>
        </div>
    </section>
    <!-- process section end -->


    <!-- reviews section start -->
    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>

        <div class="box-container container">
            <div class="box">
                <img src="./img/anh-2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ipsum. Quo, maxime nemo neque quas saepe suscipit natus! Iste, explicabo.</p>
                <div class="start">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>nam vu</h3>
                <span>satisfied clients</span>
            </div>

            <div class="box">
                <img src="./img/anh-2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ipsum. Quo, maxime nemo neque quas saepe suscipit natus! Iste, explicabo.</p>
                <div class="start">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>nam vu</h3>
                <span>satisfied clients</span>
            </div>

            <div class="box">
                <img src="./img/anh-2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ipsum. Quo, maxime nemo neque quas saepe suscipit natus! Iste, explicabo.</p>
                <div class="start">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>nam vu</h3>
                <span>satisfied clients</span>
            </div>
        </div>
    </section>
    <!-- reviews section end -->


    <!-- contact section start -->
    <section class="contact" id="contact">
        <h1 class="heading">make appoinment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach($message as $item){
                    echo '<p class="message">'.$item.'</p>';
                }
            }
            ?>
            
            <span>your name:</span>
            <input type="text" name="name" class="box" placeholder="enter your name" required>

            <span>your email:</span>
            <input type="email" name="email" class="box" placeholder="enter your email" required>

            <span>your number:</span>
            <input type="number" name="number" class="box" placeholder="enter your number" required>

            <span>appoinment date:</span>
            <input type="datetime-local" name="date" class="box">
            <input type="submit" value="make appointment" name="submit" class="link-btn" required>
        </form>

    </section>
    <!-- contact section end -->


    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123-456-7890</p>
                <p>+84-456-7777</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <p>our address</p>
                <p>vietnam, hanoi - 65632</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>11:52 pm to 00:09 am</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>namvvph23457@gmail.com</p>
                <p>thuhong@gmail.com</p>
            </div>
        </div>

        <div class="credit">
            &copy; copyright @ <?php echo date('Y') ?> by <span>Nam Vu designer</span>
        </div>
    </section>
    <!-- footer section end -->
























    <script src="./scrip.js"></script>
</body>

</html>