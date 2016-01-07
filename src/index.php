<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    /**
     * Created by PhpStorm.
     * User: Kevin
     * Date: 1/6/2016
     * Time: 10:06 AM
     */
    if(! isset($_GET['board'])){
        echo "No board found";
    }
    else{
        $squares = str_split($_GET['board']);
        $game = new Game($squares);
        if($game->winner('x')){
            echo 'You win. Lucky guesses';
        }
        elseif($game->winner('o')){
            echo 'I win!';
        }
        else{
            echo "No winner yet.";
        }
    }
    ?>
    </body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 1/6/2016
 * Time: 10:06 AM
 */

?>