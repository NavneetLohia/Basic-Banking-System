<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@100&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">

    <title>International Bank</title>

</head>

<body>
    
    <nav id='menu'>
        <input type='checkbox' id='responsive-menu'><label></label>
        <ul>
            <li><a href='index.php'><img src="images/homepage.png" style="width: 30px;padding-bottom: 6px"></a></li>
            <li><a href='customers.php'>Customers</a></li>
            <li><a href='transactions.php'>Transactions</a></li>
            <li><a href='transfer.php'>Transfer Money</a></li>
            <li><a href='contact.php'>Contact Us</a></li>
        </ul>

    </nav>
    <div class="top_container">

        <h1>International Bank</h1>
    </div>

    <div class="middle_container">


        <div class="pic">
            <img id="pic1" src="images/target.png">
            <a class="btn" href="customers.php">Customers</a>
        </div>

        <div class="pic">
            <img id="pic2" src="images/tran.png">
            <a class="btn" href="transactions.php">Transactions</a>
        </div>

      
    </div>
   



    <div class="bottom-container">
        
        <a style="margin: 0px 10px;" class="footer-link" href="https://www.linkedin.com/in/navneet-lohia-452bb4172/">LinkedIn</a>
        <a style="margin: 0px 10px;" class="footer-link" href="https://github.com/NavneetLohia">Github</a>
        <a style="margin: 0px 10px;" class="footer-link" href="https://twitter.com/LohiaNavneet">Twitter</a>
        <p class="copyright">© 2021 International Bank.</p>
        
    </div>


</body>

</html>