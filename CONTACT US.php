<html>
<head>
   <title>Contact From</title>
    <link rel="stylesheet" href="Style1/contact.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    
    <div class="contact-form">
    <h2>CONTACT US</h2>
    <form method="post" action="">
    <input type="text" name="name" palceholder="Your Name :)" required>
         <input type="text" name="phone" palceholder="Phone No " required>
     <input type="email" name="email" palceholder="Your Email " required>
        <textarea  name="message" palceholder="Your Nessage " ></textarea>
        
        <div class="g-recaptcha" data-sitekey="6Le4UdcaAAAAAPzyC7bvSZQEup-XBi6OtdMVPBxr"></div>

        
        <input type="submit" name="sumbit" value="Send Message" class="submit-btn">
        
    </form>
        
    </div>
</body>
</html>