<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Alert Message</title>
    <link rel="stylesheet" href="sty.css">

    <!-- font Awesome CDN -->
    <link rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
   integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="box">
            <h3>Get in Touch</h3>
            <div class="name">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" id="name">
            </div>
            <div class="email">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Email" id="email">
            </div>
            <div class="message-box">
                <textarea id="msg" cols="30" rows="10" 
                    placeholder="Message"></textarea>
            </div>
            <div class="button">
                <button id="send" onclick="message()">Send</button>
            </div>
            <div class="message">
                <div class="success" id="success">
                    Your Message Successfully Sent!
                </div>
                <div class="danger" id="danger">Feilds Can't be Empty!</div>
            </div>
        </div>
    </div>


    <script src="java.js"></script>
</body>
</html>