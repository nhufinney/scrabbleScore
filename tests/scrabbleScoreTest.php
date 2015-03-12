<?php

    require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {

        function test_scrabble_score_1letter()
        {
            //Arrange
            $test_word = new ScrabbleScore;
            $input = "a";

            //Act
            $output = $test_word->score($input);

            //Assert
            $this->assertEquals(1, $output);
        }

        function test_scrabble_score_2letters()
        {
            //Arrange
            $test_word = new ScrabbleScore;
            $input = "an";

            //Act
            $output = $test_word->score($input);

            //Assert
            $this->assertEquals(2, $output);
        }
    }

?>
