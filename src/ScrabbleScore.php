<?php


    class ScrabbleScore
    {

        function score($input) {


            $result="";
            $exploded_input = array();
            $exploded_input = str_split($input);

            foreach ($exploded_input as $letter) {

            if ($letter == "a" | "e" |"i" | "o" | "u" | "l"| "n" | "r" | "s" | "t") {

                $result += 1;
            }

            // if ($input == "d" | "g") {
            //     $result + = 2;
            // }
            return $result;

        }}
    }

?>
