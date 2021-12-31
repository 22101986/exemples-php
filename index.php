<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="manifest" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.ico">
    <link rel="icon"  sizes="32x32" href="favicon.ico">
    <link rel="icon"  sizes="16x16" href="favicon.ico">
    <link rel="manifest" href="favicon.ico">
    <link rel="mask-icon" href="favicon.ico" color="#5bbad5">
    <title>Atelier Php</title>
  </head>
  <body>

<header class="bg-dark text-white py-5 mb-0">
        <section class="container text-center">
         
            <p>coucou</p>
        </section>
    </header>

    <main class="container my-5">

    <?php 

      $array = [ 1, 2, 3, 4, 5 ];

// **********************exercice1
     
      var_dump($array);

      $shoes = 70;
      $jean = 59;
      $tshirt = 20;
      $reducShoes = 20 * $shoes / 100;
      $reducJean = 20 * $jean / 100;
      $reducTshirt = 20 * $tshirt / 100;

      $totalShoes = $shoes - $reducShoes;
      $totalJean = $jean - $reducJean;
      $totalTshirt = $tshirt - $reducTshirt;

      $totalPrice = $totalShoes + $totalJean + $totalTshirt;

      echo $totalPrice;
      var_dump($totalPrice);


      // **********************exercice2

      for ($i = 0; $i < 100; $i += 3) {

        if ($i&1) {
        echo ( $i.'<br>') ;
        }
}
       // **********************exercice3

       $user = [
        "lastname" => "Doe",
        "firstname" => "John",
        "nickname" => "",
        "age" => "42",
        "hobby" => "",
        "sport" => ""
      ];
      var_dump($user);
      ?>

      <br>

      <?php
    //  $user["nickname"] = "not difiend";
    //  $user["hobby"] = "not difiend";
    //  $user["sport"] = "not difiend";

     
       $nickname = strpos($user["nickname"],"[a-z]");
       $hobby = strpos($user["hobby"], "[a-z]");
       $sport = strpos($user["sport"], "[a-z]");

    
       if($nickname == false) {
        unset($user["nickname"]);
        array_push($user, "nickname", "not difiend"); 
       }
       
       if($hobby == false) {
        unset($user["hobby"]);
        array_push($user, "hobby", "not difiend"); 
       }
       if($sport == false) {
        unset($user["sport"]);
        array_push($user, "sport", "not difiend"); 
       }
       var_dump($user);
       ?>
       
       <?php

   
  $texte = "z00l0gie 0f H0nn0r";
  print $texte . "<br>";
  $texte = str_replace("0", "o", $texte);
  print $texte;


//   $numbers = [4, 15, 2, 145, 42, 5, 78, 12];
// // By default we assume that the first entry is the highest
// $result = $numbers[0];
// // We check for each number if it is superior. If so it becomes $result new value.
// foreach ($numbers as $number) {
//   if ($number > $result) {
//     $result = $number;
//   }
// }
// echo "<br>".$result;
 


$numbers = [ 5, 45, 75, 255, 378, 379, 1, 13 ];
$result = $numbers[0];

foreach ($numbers as $number) {
  if ($number > $result) {
    $result = $number;


  }
}
echo "<br>". $result;


?>

<?php


// Simple version of the function
function addDash(string $texte, int $space=5):string
{
  // The result must be a string so we initialize a string
  $result = "";
  // Add a dash to the string each time this is required
  for ($i=0; $i < $space; $i++) {
    $result .= "-";
  }
  // Return the dashes and the texte after
  return $result . $texte;
}
echo "<br>". addDash("test", 10)."<br>";

// Harder version of the function
function harderAddDash(string $texte, int $space=5):string
{
  $result = "";
  // Add a dash or an asterisk based on the type of number (odd or even)
  for ($i=0; $i < $space; $i++) {
    if ($i%2===0) {
      $result .= "*";
    } else {
      $result .= "-";
    }
  }
  // Return the dashes and the texte after
  return $result . $texte;
}
echo harderAddDash("test", 10);

function fillingTime(int $length, int $width, int $deepth, int $filling): int {
  $volume = $length*$width*$deepth;
  $fillingTime = $volume/$filling;
  return $fillingTime;
}
$fillingTime = fillingTime(8, 4, 3, 2);
echo "<br>Filling time of your swimming pool : $fillingTime min<br>";

$newFillingTime = fillingTime(15, 10, 5, 2);
echo "<br>Filling time of your swimming pool : $newFillingTime min<br>";

// function circlePerimeter(int $r): float {
//   $perimeter = 2 * pi() * $r;
//   return round($perimeter, 2);
// }

// function circleArea(int $r): float {
//   $area = ($r*$r) * pi();
//   return round($area, 2);
// }

function perimeter(int $rayon): float {
  $perimeter = 2 * pi() * $rayon;
  return round($perimeter, 2);
}

function area(int $rayon): float {
  $area = ($rayon*$rayon) * pi();
  return round($area, 2);
}

echo "rayon: 7cm, périmètre : " . perimeter(7) . " cm<br>";
echo "rayon: 7cm, périmètre : " . area(7) . " cm<br>";



// At first our pyramide is an empty string
$pyramide = "";
// It needs 5 floors so the loop runs five times
for ($i=0; $i < 5; $i++) {
  // We add an * and echo the current content
  $pyramide .= "*";
  echo $pyramide . "<br>";
}

for($n = 0; $n < 100; $n++) {
  if($n%15 === 0)  {
    echo "BUZZFIZZ<br>";
  } elseif ($n%5 === 0) {
    echo "BUZZ<br>";
  } elseif ($n%3 === 0) {
    echo "FIZZ<br>";
  } else {
    echo $n. "<br>";
  }

}


    ?>

<?php 
require "data/infos.php";
include "template/header.php"; 

if(!empty($_GET) && isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]); //sécu url

}
else {
    $error = "connais pas...";

}
?>

<h2>Detail de l'article</h2>

<?php                         //sécu id
 if(isset($error)) {
     echo $error;      
 }
 else {
    echo "vous avez cliqué sur ". $id; 
 }
?>


<?php include "template/footer.php"; ?>
  


    </main>
<footer class="bg-dark text-white py-5 mb-0">
        <section class="container text-center">
           
        </section>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
