
<?php 
include('config.php');
include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navfooter.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <title>Home</title>

</head>

<body>

    <section class="content-section">
        <img src= "imgss/car3.jpg" id="bghome" alt="">
        <img src= "imgs/bggg.jpg" id="bghome" alt="">
        <div class="black-layer">
            <h1>Welcome To Our Business</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magni a sunt, doloribus optio quia maiores
                similique mollitia tempore amet cum aperiam est eum, voluptates animi sed accusamus ad officiis.</p>
            <div class="button">
            
                <?php 
                if(!empty($_SESSION['ulogin'])){?>
                    <a href="cars.php">Read More</a>
                <?php } 
                else{?>
                    <a href="signin.php">Read More</a>
                <?php }
                ?>
                
            </div>
        </div>

    </section>

    <div id="about" class="container">
        <div class="row">
            <div class="image-section">
                <img src="imgss/car4.jpg" alt="">
            </div>
            <div class="content">
                <h1>About Us</h1>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, sint fuga nam nostrum doloremque
                    delectus est beatae repellat, esse porro unde quo adipisci atque dolores illo amet, pariatur ullam
                    odit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolore saepe perferendis dolores ad
                    rerum vel odit asperiores autem dignissimos, enim magni recusandae fugit, unde error obcaecati ipsam
                    sed deleniti? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit mollitia architecto
                    aperiam culpa amet est perspiciatis velit facilis saepe vel fugit laudantium modi nisi reprehenderit
                    illum, dicta officiis pariatur magnam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Commodi omnis laudantium natus, nostrum asperiores optio, maxime soluta totam aliquid, iusto odio
                    tenetur eligendi quasi aperiam beatae laboriosam? Minus, tempore corrupti.</p>
            </div>
        </div>
    </div>
    <!-- <section class="gallery">
        <ul>
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="cairo">Cairo</li>
            <li class="list" data-filter="giza">Giza</li>
            <li class="list" data-filter="alexandria">Alexandria</li>
            <li class="list" data-filter="luxor">Luxor</li>
            <li class="list" data-filter="aswan">Aswan</li>
            <li class="list" data-filter="country">Country Side</li>
            <li class="list" data-filter="sharm">Sharm El-Sheikh</li>
        </ul>
        <div class="trip">
            <div class="itembox" data-item="cairo">
                <img src="imgs/bggg.jpg" alt="">
            </div>
            <div class="itembox" data-item="giza">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="alexandria">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="luxor">
                <img src="imgs/bggg.jpg" alt="">
            </div>
            <div class="itembox" data-item="aswan">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="country">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="sharm">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="cairo">
                <img src="imgs/bggg.jpg" alt="">
            </div>
            <div class="itembox" data-item="giza">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="alexandria">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="luxor">
                <img src="imgs/bggg.jpg" alt="">
            </div>
            <div class="itembox" data-item="aswan">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="country">
                <img src="imgs/bgg.jpg" alt="">
            </div>
            <div class="itembox" data-item="sharm">
                <img src="imgs/bgg.jpg" alt="">
            </div>
        </div>
    </section>
    <div class="news-section">
        <div class="section-content news">
            <div class="title">
                <h2>Latest News</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nulla sed voluptatum molestiae
                    adipisci possimus tempora id unde vero, obcaecati veritatis consequuntur beatae iure doloremque
                    itaque expedita cum exercitationem numquam.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="image-section">
                        <img src="imgs/bgg.jpg" alt="">
                    </div>
                    <div class="article">
                        <h4>Market</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab nisi facere ea aspernatur
                            consequatur quaerat, animi alias modi quisquam cumque odit labore? Illum eligendi sapiente
                            hic ullam quod labore.</p>
                    </div>
                    <div class="blog-views">
                        <a href="" class="button">Read More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="image-section">
                        <img src="imgs/bgg.jpg" alt="">
                    </div>
                    <div class="article">
                        <h4>Market</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab nisi facere ea aspernatur
                            consequatur quaerat, animi alias modi quisquam cumque odit labore? Illum eligendi sapiente
                            hic ullam quod labore.</p>
                    </div>
                    <div class="blog-views">
                        <a href="cars.php" class="button">Read More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="image-section">
                        <img src="imgs/bgg.jpg" alt="">
                    </div>
                    <div class="article">
                        <h4>Market</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab nisi facere ea aspernatur
                            consequatur quaerat, animi alias modi quisquam cumque odit labore? Illum eligendi sapiente
                            hic ullam quod labore.</p>
                    </div>
                    <div class="blog-views">
                        <a href="" class="button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    -->
<section id="contact" class="contact-container">
<div class="contact">
<div>

    <div>
    <h1>Feedbacks</h1>
    </div>
    <?php 
                $qq="SELECT * FROM `feedback`";
                $do=mysqli_query($link,$qq);
                
                foreach($do as $feed){?>
                <div>
                    <h3><?php echo $feed['name'];?> </h3>
                    <p><?php echo $feed['email'];?></p>
                    <p><?php echo $feed['msg'];?></p>
                </div>

                    <?php }?>
                </div>
            <div class="title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-box">
                <div class="contact-side form">
                    <h3>Send a Message</h3>
                    <form action="" method="post">
                    
                        <div class="form-box">
                            <div class="row50">
                                <div class="inputbox">
                                    <span>First Name</span>
                                    <input type="text" name="fn" placeholder="Enter Your First Name">
                                </div>
                                <div class="inputbox">
                                    <span>Last Name</span>
                                    <input type="text" name="ln" placeholder="Enter Your Last Name">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputbox">
                                    <span>Email</span>
                                    <input type="email" name="em" placeholder="Enter Your Email Address">
                                </div>
                                <div class="inputbox">
                                    <span>Mobile Number</span>
                                    <input type="text" name="mn" placeholder="Enter Your Mobile Number">
                                </div>
                            </div>
                            <div class="row100">
                                <input type="text" class="textarea" name="tx" placeholder="Write Your Message......." />
                            </div>
                            <div class="row100">
                                <input type="submit" name="submit" value="Send">
                            </div>
                            <?php 
                            if(isset($_POST['submit'])){
                                $fn=htmlspecialchars($_POST['fn']);
                                $ln=htmlspecialchars($_POST['ln']);
                                $em=htmlspecialchars($_POST['em']);
                                $mn=htmlspecialchars($_POST['mn']);
                                $tx=htmlspecialchars($_POST['tx']);
                                $name= $fn . $ln;
                                
                                $quer="INSERT INTO `feedback`(`name`,`msg`,`Phone`,`email`) VALUES ('$name','$tx','$mn','$em')";
                                $done=mysqli_query($link,$quer);
                                }
                            ?>        
                            
                    </form>
                </div>
            </div>

            <div class="contact-side info">
                <h3>Contact Info</h3>
                <div class="infobox">
                    <div>
                        <img src="imgs/social/telegram.png" alt="">
                        <p>Maadi, Cairo, <br>Egypt</p>
                    </div>
                    <div>
                        <img src="imgs/social/telegram.png" alt="">
                        <a href="mailto:loremipsum@email.com">loremipsum@email.com</a>
                    </div>
                    <div>
                        <img src="imgs/social/telegram.png" alt="">
                        <a href="telto:011111111111">0111111111111</a>
                    </div>
                    <ul class="some">
                        <li><a href=""><img src="imgs/social/facebook.png" alt=""></a></li>
                        <li><a href=""><img src="imgs/social/facebook.png" alt=""></a></li>
                        <li><a href=""><img src="imgs/social/facebook.png" alt=""></a></li>
                        <li><a href=""><img src="imgs/social/facebook.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-side map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4108.643614789891!2d31.19723431406366!3d30.009773307248057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1678021171901!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </section>
    
    <div class="copyrights">
        <p>Copyright @2023 X Team . All Rights Reserved.</p>
    </div>


    <script src="js/nav.js"></script>
    <script src="js/home.js"></script>
</body>

</html>