<!DOCTYPE html>
<?php 
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);
    /*
    $user = "Domenico";
    if($user == "Domenico"){
        $welcome = "Benvenuto ";
        //$welcome = $welvome . $user;
        $welcome .= $user;
    }*/

    //lettura del contenuto del form
    //variabili superglobali $_POST e $_GET
    $thriller_movies = array(
        [0] => array(
            "title" => "inception",
            "year" => "2010"
        ),
        [1] => array(
            "title" => "joker",
            "year" => "2019"
        ),
        [2] => array(
            "title" => "il silenzio degli innocenti",
            "year" => "1991"
        )
    );
    $comey_movies = array(
        [0] => array(
            "title" => "free guy",
            "year" => "2021"
        ),
        [1] => array(
            "title" => "Crudelia",
            "year" => "2021"
        )
    );


    $movies = array(
        "C" => $comedy_movies,
        "T" => $thriller_movies
    );

    $genre_list = array(
        "C" => "Commedie",
        "T" => "Thriller",
        "H" => "Horror"
    );

    //array chiavi miste
    $genre_list[] = "History";
    $genre_list["A"] = "Action";
    $genre_list[] = "Scifi";
    $genre_list[3] = "Crime";
    $genre_list[] = "Suspence";

    $title = $_POST['title'];
    $genre = $_POST['genre'];
?>
<html>
    <head>
        <title>Film e pellicole per tipologia</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="uk-container uk-padding">
            <h2>MovieAPP - Pellicole disponibili</h2>
            <div> <?php print_r($genre_list);?> </div> 
            <div> <?php print("titolo scelto: " . $title);?> </div>
            <div> <?php print("genere scelto: " . $genre_list[$_POST[]]);?> </div>
            
        </div>
        <?php 
        //crea tabella con lista di pellicole
        // colonna 1 : titolo film
        // colonna 2 : anno di uscita

        //usare forEach

        
        
        ?>
    </body>
</html>