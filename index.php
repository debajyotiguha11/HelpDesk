<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HelpDesk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="loading">
        <div id="spinner"></div>
    </div>
    <div id="magnify">
        <h1 onclick="closemagnify()"><i class="fas fa-times"></i></h1>
        <div id="img_here"></div>
    </div>
    <header id="header" class="animated slideInDown" style="animation-delay:1.8s;">
        <table>
            <tr>
                <td id="logo">HelpDesk</td>
                <td id="navigation">
                    <a href="index1.php">Sign in</a>
                    <a href="#bio">about</a>
                    <a href="#contact">contact</a>
                </td>
            </tr>
        </table>
    </header>
    <table id="top_part">
        <tr>
            <td id="about" class="animated slideInLeft" style="animation-delay:2s;">
                <h1>Ticketing software for effortless customer support.</h1>
                <button class="btn_one" onClick = "window.location.href ='index1.php';">Take Me</button><br>
                <table>
                    <tr>
                        <td class="animated zoomIn" style="animation-delay:2.2s;"><a class="social"><i class="fab fa-facebook"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:2.4s;"><a class="social"><i class="fab fa-twitter"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:2.6s;"><a class="social"><i class="fab fa-instagram"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:2.8s;"><a class="social"><i class="fab fa-dribbble"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:3.0s;"><a class="social"><i class="fab fa-medium"></i></a></td>
                    </tr>
                </table>
            </td>
            <td id="rightImage" class="animated jackInTheBox" style="animation-delay:2.2s;"></td>
        </tr>
    </table>
    
    <div id="bio">
        <h1>about</h1>
        <p>
            Helpdesk is a simple ticket system that allows customers to create new tickets that can be answered by certain members. Helpdesk has been developed using PHP not frameworks, thats why its not confusing and really easy to use.
        </p>
        <p>FEATURES: 
        <ul>
<li> Simple clean Design </li>
<li> Built with PHP and OOP, MySQL</li>
<li> AJAX Forms</li>
<li> PHPMailer</li>
<li> Easy to Integrate</li>
<li> Config to get you started</li>
<li> Admin Panel</li>
<li> User Management</li>
<li> Site Management</li>
<li> Departments Management</li>
<li> Gravatar Images</li>
<li> Mobile Friendly</li>
<li> Config File</li>
<li> and Many more...</li>
        </p>
    </div>
    <div id="contact">
        <h1>contact</h1>
            <table>
                <tr>
                    <td>
                        <div id="inner_div">
                            <table id="inner_table">
                                <tr>
                                    <td><i class="fas fa-phone"></i> &nbsp; +918293111380</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-at"></i> &nbsp; yourname@email.com</td>
                                </tr>
                                 <tr>
                                    <td><i class="fas fa-fax"></i> &nbsp; +918293111380</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-map-marker-alt"></i>
                                    <div id="address">
                                        Street 123,<br>
                                        blah blah city,<br>
                                        blah blah country
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="social"><i class="fab fa-facebook"></i></a>
                                        <a class="social"><i class="fab fa-twitter"></i></a>
                                        <a class="social"><i class="fab fa-instagram"></i></a>
                                        <a class="social"><i class="fab fa-dribbble"></i></a>
                                        <a class="social"><i class="fab fa-medium"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td>
                        <form action="mailto.php" method="POST">
                            <input type="text" name="name" placeholder="name" required>
                            <input type="email" name="email" placeholder="email" required><br>
                            <textarea name="msg" placeholder="your message" required rows="5"></textarea><br>
                            <button class="btn_one">send</button>
                        </form> 
                    </td>
                </tr>
            </table>
    </div>
    <div id="footer">
        made on earth by a human <br>
    </div>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>
