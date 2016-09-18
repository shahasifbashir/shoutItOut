<?php
$query = "SELECT * FROM data";
$shouts = mysqli_query($con,$query)

?>
</head>
<body>
    <div id="container">
        <header>
            <h1>SHOUT IT</h1>
        </header>
        <main>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)):?>
                        <li class="shout"><span><?php echo $row['time']; ?></span> -<b> <?php echo $row['user']; ?></b>: <?php echo $row['message']; ?></li>
                    <?php endwhile;?>
                </ul>
            </div>
            <div id="input">
                
                <?php if(isset($_GET['error'])):?>
                <div class="error"><?php echo $_GET['error'];?> </div>
                <?php endif;?>
            <form method="post" action="pages/process.php">
                <input type="text" names="user" placeholder="Enter your name" required="required"/>
                <input type="text" names="message" placeholder="Enter your message" required="required"/>
                <br>
                <input class="submit-btn" type="submit" name="submit" value="Shout It Loud"/>
            </form>    
            </div>

        <main>
    </div>