<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atelierPhp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="manifest" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.ico">
    <link rel="icon"  sizes="32x32" href="favicon.ico">
    <link rel="icon"  sizes="16x16" href="favicon.ico">
    <link rel="manifest" href="favicon.ico">
    <link rel="mask-icon" href="favicon.ico" color="#5bbad5">
</head>

<body class="bg bg-dark text-light">
    <h1>Mon titre html</h1>
    <h2><?php echo "texte php";?></h2>

    <p> <?php 
            $ok = true;
             $date = date('d/m/Y h:i:s');
             echo "$date <br>"; 
             
             
             

             
             ?>.</p>
             

    <?php                           //tests
    $class = "text-center";
    $numbers = [0, 1, 2, 3, 4 ];
    $nbr = 0;
    foreach($numbers as $nbr) {
        
        echo "<div class='container bg  $class' style='background-color:gray;'><a class='btn btn-dark p-2 m-2'>valid✅</a><a class='btn btn-dark p-2 m-2'>invalid❌</a> $numbers[$nbr]<br></div>";
        var_dump($numbers);
           
        }
    ?> 

    <?php
        $name = ["Pierrache", "Harold" ];
        var_dump($name);
    ?>
    <h3>Exemple d'usage des tableaux et des boucles</h3>
    <?php 
    // tableau
        // $priceList = [15.60, 8.35, 124.99, 500, 59.99];

        $priceList = [            //tableau associatif
         "parfum" =>   15.60,
         "shampoing" => 8.35, 
         "switch" => 230,
         "ordi" => 500,
         "chiffon" => 59.99
        ];

        // exemple de fonction
        function taxedPrice(float $arg): float {
            return $arg * 1.2;
        }

        foreach($priceList as $index => $price) {
            echo "<p> $index : " .taxedPrice($price) . " TTC</p>";

        }
    ?>

<script>
        let ok = "acceder";
         alert(ok);
         </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>