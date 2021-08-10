

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=myriad-pro">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    
    <script>
        $(function () {
            $("form[name='contactForm']").validate({
                // Define validation rules
                rules: {
                    client_name: "required",
                    subject: "required",
                    message: "required",
                    name: {
                        required: true
                    },
                    subject: {
                        required: true,
                    },
                    message: {
                        required: true
                    }
                },
                // Specify validation error messages
                messages: {
                    client_name: "Please provide a valid name.",

                    subject: "Please enter your subject",
            
                    message: "Please enter your message"
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        }); 
    </script>

    <title>Contact Us</title>
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
                <div>
                    <h2>Contact</h2>
                    <p>Get in touch</p>
                    <div class="triangle"></div>
                </div>
                <a href="admin/logout.php">
                <div>
                    <h2>Log out</h2>
                    <p>Back to log in</p>
                </div>
                </a>
            </div>
            <main>
                <div class="contact-form">
                    <form name="contactForm" action="admin/contact_post.php" method="post">
                    <label for="client_name">Name:</label>
                    <input type="text" name="client_name" class="input" >
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" class="input">
                    <label for="message">Description:</label>
                    <textarea name="message" id="message"></textarea>
                    <input type="submit" name="submit" value="Submit" class="submit-buton">
                    </form>
                </div>


            </main>
            <footer>
                <div class="info">
                    <div class="pages">
                        <h2>Pages</h2>
                        <ul class="pages-list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li>Gallery</li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li>Videos</li>
                            <li>Contact</li>
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
    </body>
    </html>