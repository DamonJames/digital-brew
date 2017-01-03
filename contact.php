<DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="script/jquery-3.1.0.min.js"></script>
    <script src="script/script.js"></script>
    <style>
    html {
        background: url(images/pic6.jpeg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>
</head>
<body>

    <div id="loadScreen"><div id="loading">loading...</div></div>

    <img class="logoCover" src="images/digitalbrewLogoCover.jpg"/>
    <img class="logo" src="images/digitalbrewLogo1.jpg.svg"/>

    <div class="header"></div>

    <?php

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['enquiry'])) {
        echo $name = $_POST['name'];
        echo $email = $_POST['email'];
        echo $enquiry = $_POST['enquiry'];

        if (!empty($name) && !empty($email) && !empty($enquiry)) {
            
            $to = 'damonmorris16@gmail.com';
            $subject = 'Contact form submitted';
            $body = $name."\n".$enquiry;
            $headers = 'From: '.$email;

            if (@mail($to, $subject, $body, $headers)) {
                echo 'Thanks for contacting';
            } else {
                echo 'Sorry an error occured, please try again later';
            }

        } else {
            echo 'All fields are required';
        }
    };

    ?>

    <form action="contact.php" method="POST" class="contact">
        Name:<br>
        <input class="name" type="text" name="name"><br>
        E-mail:<br>
        <input class="email" type="text" name="email"><br>
        Enquiry:<br>
        <textarea class="enquiry" type="text" name="enquiry"></textarea><br><br>
        <input class="submit" type="submit" value="SUBMIT">
    </form>

    <p class="contactInfo">In need of a website?<br><br>Please submit your details
    in the contact form and details of the type of project you desire.<br>
    The more information and detail on the project, the better.<br>Responses
    are completed within 24 hours.</p>

    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </ul>

</body>