<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>COMP 4711 Lab 1!</title>
    </head>
    <body>
    <?php
    require 'game.php';
    /**
     * Created by PhpStorm.
     * User: Kevin
     * Date: 1/6/2016
     * Time: 10:06 AM
     */
    //We check if our board was set
    if(! isset($_GET['board'])){
        //If it is not set then allow the player to start the game
        echo '<form action="index.php" method="GET" >';
        echo 'Tic Tac Toe!</br>';
        //We set our board to a blank board
        echo '<input type="hidden" name="board" value="---------">';
        echo '<input type="submit" value="Play">';
        echo '</form>';

    }
    else{
        //Start a new game
        $game = new Game($_GET['board']);
        //Check if the computer wins
        if($game->winner('x')){
            echo 'Computer wins!';
            reset_board();
        }
        //Check if the player wins
        elseif($game->winner('o')){
            echo 'Player wins!';
            reset_board();
        }
        else{
            //If neither won let the computer take its turn
            $game->pick_move();
            //Check if the computer wins
            if($game->winner('x')){
                echo 'Computer wins!';
                reset_board();
            }
            //If the computer doesn't win, let the player take their turn
            else
                $game->display();
        }
    }
    /**
     * Purpose: Unsets our board variable and displays a form to restart the game.
     */
    function reset_board() {
        unset($_GET['board']);
        echo '<form action="index.php" method="GET">';
        echo '<input type="submit" value ="Replay">';
        echo '</form>';
    }
    ?>
    </body>
</html>
