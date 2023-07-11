<?php 
    require __DIR__.'/models/product.php';
    require __DIR__.'/models/accessories.php';
    require __DIR__.'/models/games.php';
    require __DIR__.'/models/food.php';
    require __DIR__.'/db.php';

    $products = [
        new Food('Royal Canin Mini Adult', 'https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg', 43.99, 'Cane', 545, 'Prosciutto, Riso'),
        new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, 'Cane', 600, 'Manzo, Cereali'),
        new Food('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, 'Gatto', 400, 'Tonno, Pollo, Prosciutto'),
        new Food('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2,95, 'Pesce' , 30, 'Pesci e sottoprodotti di pesci, cereali, lieviti, alghe')
    ];  
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
                <?php foreach($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $product->image; ?>">
                        <div class="card-body">
                            <div class="card-title">
                                <h4><?php echo $product->name ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>