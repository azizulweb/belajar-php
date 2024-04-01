<?php 
$products =
[
    // 1
    [ 
       "menu" => "Siomay",
       "img" => "images/breafaet_4.jpg",
       "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
       "price" => "20.000"

    ],
    // 2
    [
        "menu" => "Vegetable Sunrise",
        "img" => "images/breafaet_2.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
    ],
    // 3
    [
        "menu" => "Pie Berry",
        "img" => "images/breakfeast_3.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
    ],
    // 4
    [
        "menu" => "Black Coffe",
        "img" => "images/bg.kopihitam.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
    ],
    // 5
    [
        "menu" => "MilkShake Oreo",
        "img" => "images/milkshake.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
    ],
    // 6
    [
        "menu" => "Coffe Latte",
        "img" => "images/exxpresso.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
     ],
    // 7
     [
         "menu" => "Chiken Karee",
         "img" => "images/maincourse4.jpg",
         "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
         "price" => "20.000"
  
     ],
    // 8
     [
         "menu" => "Steak Salad",
         "img" => "images/maincourse1.jpg",
         "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
         "price" => "20.000"
  
     ],
    // 9
     [
         "menu" => "Satay",
         "img" => "images/maincourse3.jpg",
         "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
         "price" => "20.000"
  
     ],
    // 10
     [
         "menu" => "Dessert Cake",
         "img" => "images/dessert1.jpg",
         "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
         "price" => "20.000"
  
     ],
    // 11
     [
        "menu" => "Red Velvet",
        "img" => "images/dessert3.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
    ],
    // 12
    [
        "menu" => "Matcha Dessert",
        "img" => "images/dessert2.jpg",
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing.",
        "price" => "20.000"
 
    ],
 
]
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Product</title>
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylenew.css">
</head>

<body class="bg-caffe">
    <div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
        <!-- Menu -->
        <nav class="d-md-flex p-4">
            <div>
                <h1>Caffe<span>.1Rasa</span></h1>
            </div>

            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-md-3"><a href="login.php"
                            class="text-decoration-none text-dark fw-bold">MyProduct</a>
                    </li>
                    <li class="list-inline-item mx-md-3"><a href="" class="text-decoration-none text-dark fw-bold">About
                            is</a>
                    </li>
                    <li class="list-inline-item mx-md-3"><a href="" class="text-decoration-none text-dark fw-bold">Order
                            Way</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Banner -->
        <div class="px-4 mb-4">
            <img src="images/bg-caffe" class="w-100">
        </div>

        <!--Catalouge -->
        <h3 class="text-center">List Menu</h3>
        <div class="text-center w-50 mx-auto fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum
            explicabo in dignissimos, velit vel itaque.</div>

      
        <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
            <?php  foreach ($products as $product) : ?>
                <div class="col mb-5"> 
                    <div class="card shadow">
                        <img src="<?= $product['img'] ?>" class="card-img-top" >
                        <div class="card-body ">
                            <h5 class="card-title"><?= $product['menu'] ?></h5>
                            <p class="card-text"><?= $product['desc'] ?></p>
                        </div>

                        <div class="card-footer d-md-flex">
                            <a href="Dashboard.html" class="btn btn-primary d-block">detail</a>
                            <span class="m-auto text-dark fw-bold d-block text-center"><?= $product['price'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html> 