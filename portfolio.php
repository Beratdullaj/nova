<?php
require 'admin/dbconnect.php';

$query = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 1');
$posts = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=myriad-pro">
    <title>Portfolio</title>
</head>
<body>
    <!-- Header -->
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
            <div class="border-color"></div>
        </header>
            <div class="top-menu">
                <a href="index.php">
                <div>
                    <h2>Home</h2>
                    <p>Welcome</p>
                </div>
                </a>
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
                <div>
                    <h2>Portfolio</h2>
                    <p>Featured pictures</p>
                    <div class="triangle"></div>
                </div>
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
            <!-- Main -->
            <div class="content">
                <div class="title">
                    <h2>The portfolio</h2>
                    <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. ultricies eget.</p>
                </div>
                <img src="images/line.png" alt="Image not found">
                <div class="categories-buttons">
                    <p>Categories</p>
                    <button>Webdesign</button>
                    <button>Webdesign</button>
                    <button>Webdesign</button>
                </div>
                <div class="row1">
                    <div class="first-post">
                    <?php foreach ($posts as $post) : ?>
                        <h2><?= $post['title'];?></h2>
                        <img src="admin/uploads/<?=$post['image']?>" alt="Image not found">
                        <p>
                            <?= $post['description']?>
                        </p>
                        <img src="images/readMoreSmallLine.png" alt="Image not found">
                        <?php endforeach; ?>
                    </div>
                    <div class="second-post">
                    <?php foreach ($posts as $post) : ?>
                        <h2><?= $post['title'];?></h2>
                        <div class="post-with-info">
                            <div class="post-description">
                                <p><b>Project date</b> <?= $post['date_add']?> </p>
                                <p><b>Client</b> Admin </p>
                            </div>
                            <img src="admin/uploads/<?=$post['image']?>" alt="Image not found">
                        </div>
                        <p>
                            <?= $post['description']?>
                        </p>
                        <img src="images/readMoreSmallLine.png" alt="Image not found">
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row2">
                <?php foreach ($posts as $post) : ?>
                    <div class="third-post">
                        <h2><?= $post['title'];?></h2>
                        <img src="admin/uploads/<?=$post['image']?>" alt="Image not found">
                        <p>
                            <?= $post['description']?>
                        </p>
                        <img src="images/readMoreSmallLine.png" alt="Image not found">
                        
                    </div>
                    <div class="fourth-post">
                        <h2><?= $post['title'];?></h2>
                        <img src="admin/uploads/<?=$post['image']?>" alt="Image not found">
                        <p>
                            <?= $post['description']?>
                        </p>
                        <img src="images/readMoreSmallLine.png" alt="Image not found">
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="page-buttons">
                    <button><</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>></button>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li>Gallery</li>
                        <li>Portfolio</li>
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