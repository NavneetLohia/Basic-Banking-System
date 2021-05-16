<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">
    <title>Transfer Money</title>
</head>

<body style="background-color: green; margin:0">
    <nav id='menu'>
        <input type='checkbox' id='responsive-menu'><label></label>
        <ul>
            <li><a href='index.php'><img src="images/homepage.png" style="width: 28px;padding-top: 8px"></a></li>
            <li><a href='customers.php'>Customers</a></li>
            <li><a href='transactions.php'>Transactions</a></li>
            <li><a href='transfer.php'>Transfer Money</a></li>
            <li><a href='contact.php'>Contact Us</a></li>
        </ul>

    </nav>

    <div style="padding: 0px; margin:0">

        <h3></h3>

    </div>

    <div class="tbody">

    <div class="form-container">
        <h2>Transfer Money</h2>
        <form action="transfermoney.php" method="POST">

            <div>
                <label for="sender" style="padding-right: 25px">Sender</label>
                <select class="select" name="senderlist" id="sender">
                    <option value="Navneet">Navneet</option>
                    <option value="Harry">Harry</option>
                    <option value="Alex">Alex</option>
                    <option value="Benedict">Benedict</option>
                    <option value="Lisa">Lisa</option>
                    <option value="George">George</option>
                    <option value="Sam">Sam</option>
                    <option value="Natasha">Natasha</option>
                    <option value="Lana">Lana</option>
                    <option value="Peter">Peter</option>
                </select>
            </div>
            <br>
            <div>
                <label for="receiver" style="padding-right: 10px">Receiver</label>
                <select class="select" name="receiverlist" id="receiver">
                    <option value="Navneet">Navneet</option>
                    <option value="Harry">Harry</option>
                    <option value="Alex">Alex</option>
                    <option value="Benedict">Benedict</option>
                    <option value="Lisa">Lisa</option>
                    <option value="George">George</option>
                    <option value="Sam">Sam</option>
                    <option value="Natasha">Natasha</option>
                    <option value="Lana">Lana</option>
                    <option value="Peter">Peter</option>
                </select>
            </div>
            <br>
            <div>
                <label for="amount" style="padding-right: 12px;">Amount</label>
                <input type="number" name="amount">
            </div>
            <br>
            <div style="padding-left: 108px">
                <input class="tbtn" type="submit" value="Transfer">
            </div>
        </form>
    </div>
</div>



</body>

</html>

