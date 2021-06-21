<!DOCTYPE html>
<head>
    <title>Fodesti Categories</title>

    <link rel="stylesheet" type="text/css"  href="public/css/style.css">
    <link rel="stylesheet" type="text/css"  href="public/css/category.css">
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

                <?php if(isset($categories)){
                    foreach ($categories as $category): ?>
<!--                <a class="categories-box" href="http://localhost:8080/dishes?title=--><?//=$category->getTitle()?><!--">-->
                    <div class="box">
                        <h3><?= $category->getTitle(); ?></h3>
                        <img class="box-image" src="public/uploads/<?= $category->getImageName(); ?>">
                    </div>
<!--                </a>-->
                <?php endforeach; } ?>
            </div>
        </section>
    </main>
</div>
</body>


