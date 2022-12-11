<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Website dengan PHP | Niagahoster</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=ticket">Ticket</a></li>
                <li><a href="index.php?page=category">Category</a></li>
                <li><a href="index.php?page=home">Home</a></li>
                <img src="https://i.postimg.cc/rFQ8TMy9/terompet.png" width="55px" align="left" />
                <p style="font-size: 20px; font-family: garlic butter; color: black;">Java Fest </p>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'ticket':
                include "ticket.php";
                break;
                case 'category':
                    include "category.php";
                    break;
                case 'contact':
                include "contact.php";
                break;          
            }
        }
else{
            include "home.php";
        }
        ?>
    </div> 
    <footer>
        <img src="https://i.postimg.cc/rFQ8TMy9/terompet.png" width="55px" align="left" />
        <br>
          &copy JavaFest | Festival Terbaik Sepanjang Masa
          <div class="footer2">
            <a href="https://www.instagram.com/zhfrhjldne_/">
                <img src="https://i.postimg.cc/sxbjS1MZ/1516920571instagram-png-instagram-icon-1600x1600.png" width="25">
            <a href="https://wa.me/+6285719360536">
                &nbsp<img src= "https://i.postimg.cc/ry0ncg1w/logo-whatsapp-fundo-transparente-icon.webp" width="23">
            <a href="https://mail.google.com/mail/u/3/#inbox">
                &nbsp<img src= "https://i.postimg.cc/5t9tk6LB/email-PNG100739.png" width="25">
 
    </div>
    </footer>
</body>
</html>