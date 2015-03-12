<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new\Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'
));

    $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
    });

    $app->get("/result", function() use ($app) {
        $input_word = $_GET['input'];
        $game= new ScrabbleScore;
        $result_user = $game->score($input_word);

    return $app['twig']->render('result.twig' , array (
        'output' => $result_user,
        'userword' => $input_word
    ));
    });

    return $app;


?>
