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
            $result = $test_word->score($input);

            //Assert
            $final_score = 1;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabble_score_2letters()
        {
            //Arrange
            $test_word = new ScrabbleScore;
            $input = "na";

            //Act
            $result = $test_word->score($input);


            //Assert
            $final_score = 2;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabble_score_3letters()
        {
            //Arrange
            $test_word = new ScrabbleScore;
            $input = "eat";

            //Act
            $result = $test_word->score($input);


            //Assert
            $final_score = 3;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabble_score_3letters_different_points()
        {
            //Arrange
            $test_word = new ScrabbleScore;
            $input = "dac";

            //Act
            $result = $test_word->score($input);


            //Assert
            $final_score = 6;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabble_score_4letters_different_points()
        {
            //Arrange
            $test_word = new ScrabbleScore;
            $input = "words";

            //Act
            $result = $test_word->score($input);


            //Assert
            $final_score = 9;
            $this->assertEquals($final_score, $result);
        }

    }

?>
