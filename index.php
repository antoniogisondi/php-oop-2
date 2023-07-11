<?php 
    require __DIR__.'/models/product.php';
    require __DIR__.'/models/accessories.php';
    require __DIR__.'/models/games.php';
    require __DIR__.'/models/food.php';
    require __DIR__.'/db.php';
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Boolshop</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex flex-wrap justify-content-center">

                    <?php foreach($foods as $food) { ?>
                    <div class="card">
                        <img src="<?php echo $food->image; ?>">
                        <div class="card-body">
                            <div class="card-title">
                                <h4><?php echo $food->name ?></h4>
                            </div>
                            <p class="card-text"><?php echo $food->category ?></p>
                            <p class="card-text">Prezzo: <?php echo $food->price ?></p>
                            <p class="card-text">Peso netto: <?php echo $food->weight ?></p>
                            <p class="card-text">Ingredienti: <?php echo $food->ingredients ?></p>
                        </div>
                    </div>
                    <?php } ?>

                    <?php foreach($accessories as $accessory) { ?>
                     <div class="card">
                        <img src="<?php echo $accessory->image ?>">
                        <div class="card-body">
                            <div class="card-title">
                                <h4><?php echo $accessory->name ?></h4>
                            </div>
                            <p class="card-text"><?php echo $accessory->category ?></p>
                            <p class="card-text">Prezzo: <?php echo $accessory->price ?></p>
                            <p class="card-text">Materiale: <?php echo $accessory->materials ?></p>
                            <p class="card-text">Dimensioni: <?php echo $accessory->size ?></p>
                        </div>
                     </div>   
                    <?php } ?>

                    <?php foreach($games as $game) { ?>
                     <div class="card">
                        <img src="<?php echo $game->image ?>">
                        <div class="card-body">
                            <div class="card-title">
                                <h4><?php echo $game->name ?></h4>
                            </div>
                            <p class="card-text"><?php echo $game->category ?></p>
                            <p class="card-text">Prezzo: <?php echo $game->price ?></p>
                            <p class="card-text">Caratteristiche: <?php echo $game->features ?></p>
                            <p class="card-text">Dimensioni: <?php echo $game->size ?></p>
                        </div>
                     </div>   
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>