<?php


    class ScrabbleScore
    {


    function score($input){

        $score = array();
        $word_split = array();
        $one = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
        $word_split = str_split($input);
        $tile = 0;
        $final_score = 0;

        foreach ($word_split as $letter)
        {
            if (in_array($letter, $one)) {
                ++$tile;
                array_push($score, $tile);
                $tile=0;
             }

        $final_score = array_sum($score);

        }
        return $final_score;
    }}
?>
