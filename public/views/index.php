<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fodesti</title>

    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="base-container">
        <?php include('public/views/nav.php'); ?>
        <main>
            <?php include('public/views/searchBar.php'); ?>
            <section class="categories">
                <h2>Categories</h2>
                <div class="categories-box">
                    <div class="box">
                        <h3>Pizza</h3>
                        <img class="box-image" src="public/images/pizza.jpg" alt="">
                    </div>
                    <div class="box">
                        <h3>Burger</h3>
                        <img class="box-image" src="public/images/burger.jpg" alt="">
                    </div>
                    <div class="box">
                        <h3>Spaghetti</h3>
                        <img class="box-image" src="public/images/spaghetti.jpg" alt="">
                    </div>
                </div>
            </section>
            <section class="food-menu">
                    <h2>Menu</h2>
                    <div class="box-food-menu">
                        Food Menu
                    </div>
                    <div class="box-food-menu">
                        Food Menu
                    </div>
                    <div class="box-food-menu">
                        Food Menu
                    </div>
                    <div class="box-food-menu">
                        Food Menu
                    </div>
            </section>
            <footer>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <p>Wszystkie prawa zastrzeżone</p>
                </div>
            </footer>
        </main>
        
    </div>
</body>
</html>