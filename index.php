<?php
require 'admin/dbconnect.php';

$query = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 3');
$post_last_3_posts = $query->fetchAll();

$query_5 = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 5');
$post_last_5_posts = $query_5->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=myriad-pro">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="top">
                <h1>Nova</h1>
                <p>Sleek teme</p>
                <div class="search-input">
                    <input type="search" name="searchbox" class="searchbox "/>
                    <i class="fa fa-search"></i>
                </div>
            </div>
        </header>
            <div class="top-menu">
                <div>
                    <h2>Home</h2>
                    <p>Welcome</p>
                    <div class="triangle"></div>
                </div>
                <a href="blog.php">
                <div>
                    <h2>Blog</h2>
                    <p>Read our posts</p>
                </div>
                </a>
                <div>
                    <h2>Gallery</h2>
                    <p>Featured pictures</p>
                </div>
                <a href="portfolio.php">
                <div>
                    <h2>Portfolio</h2>
                    <p>Featured pictures</p>
                </div>
                </a>
                <div>
                    <h2>Video</h2>
                    <p>Streaming</p>
                </div>
                <a href="contact.php">
                <div>
                    <h2>Contact</h2>
                    <p>Get in touch</p>
                </div>
                </a>
                <a href="admin/logout.php">
                <div>
                    <h2>Log out</h2>
                    <p>Back to log in</p>
                </div>
                </a>
            </div>


        <main>
            <!-- Slideri -->
            <div class="slideshow-container">
            <?php foreach($post_last_5_posts as $post) : ?>
                <div class="mySlides animated">
                    <img src="admin/uploads/<?echo $post['image']?>">
                </div>
                    <?php endforeach;?>
                <a class="slide-prev" onclick="plusSlides(-1)"><</a>
                <a class="slide-next" onclick="plusSlides(1)">></a>
            </div>
            
            <div class="slide-dot-control">
                <span class="slide-dot" onclick="currentSlide(1)"></span>
                <span class="slide-dot" onclick="currentSlide(2)"></span>
                <span class="slide-dot" onclick="currentSlide(3)"></span>
                <span class="slide-dot" onclick="currentSlide(4)"></span>
                <span class="slide-dot" onclick="currentSlide(5)"></span>
            </div>
            

            <!-- Content -->

            <div class="content">
                <div class="content-title">
                    <h2>Pellentesque habitant morbi tristique senectus et netus et <br> malesuada fames ac turpis egestas. Donec  et eu libero sit amet </h2>
                    <button type="button" class="learn-more">Learn more</button>
                </div>
                <div class="items">
                    <button type="button" class="tab-item">Tab item</button>
                    <button type="button" class="tab-item">Tab item</button>
                    <button type="button" class="tab-item">Tab item</button>
                </div>
                <div class="main-boxes">
                <?php foreach ($post_last_3_posts as $post) : ?>
                    <div class="box">
                        <img src="admin/uploads/<?=$post['image']?>" alt="Image not found">
                        <h3><?= $post['title'];?></h3>
                        <p>
                           <?= $post['description']?>
                        </p>
                        <input type="button" value="Read more">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="text-slider">
                <img src="images/twitter-logo.png" alt="Image not found">
                <div class="text-slider">
                    <h3>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec eu libero sit amet quam egestas semper. Yesterday
                    </h3>
                </div>
                <div class="slider-buttons">
                    <span class="slide-dot" onclick="currentSlide()"></span>
                    <span class="slide-dot" onclick="currentSlide()"></span>
                    <span class="slide-dot" onclick="currentSlide()"></span>
                </div>
            </div>
        </main>


        <!-- Footer -->
        <footer>
            <div class="info">
                <div class="pages">
                    <h2>Pages</h2>
                    <ul class="pages-list">
                        <li>Home</li>
                        <li><a href="blog.php">Blog</a></li>
                        <li>Gallery</li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li>Videos</li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="categories">
                    <h2>Categories</h2>
                    <ul class="categories-list">
                        <li>Lorem ipsum sempre dolor sit ame </li>
                        <li>Aliquam tincidunt sempre mauris eu risus</li>
                        <li>Lorem ipsum dolor sit ame.</li>
                        <li>Aliquam tincidunt mauris  sempre eu risus</li>
                        <li>Lorem ipsum dolor sit ame.</li>
                        <li>Aliquam tincidunt mauris eu risus</li>
                    </ul>
                </div>
                <div class="contact-info">
                    <h2>Contact info</h2>
                    <ul class="contact-info-list">
                        <li>Lorem ipsum dolor amet Donec eu libro semper </li>
                        <li>aneam ite semin ur  #3234 </li>
                        <li>(555) 343.1234</li>
                        <li>contact@nova.com</li>
                        <li><a href="www.luiszuno.com">www.luiszuno.com</a></li>
                    </ul>
                </div>
            </div>
                <div class="all-rights">
                    <div class="all-rights-text">
                        <p>2011 Luiszuno all rights reserved</p>
                    </div>
                    <div class="follow-us">
                        <h3>Follow us</h3>
                        <div class="follow-icons">
                            <img src="images/followUs1.png" alt="Image not found">
                            <img src="images/followUs2.png" alt="Image not found">
                            <img src="images/followUs3.png" alt="Image not found">
                            <img src="images/followUs4.png" alt="Image not found">
                            <img src="images/followUs5.png" alt="Image not found">
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
</body>
</html>