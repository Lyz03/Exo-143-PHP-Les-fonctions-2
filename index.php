<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 143</title>
</head>
<body>

<?php
    // part 1
    /**
     * @return bool
     */
    function rtTrue() : bool {
        return true;
    }

    echo rtTrue() . "<br>";


    // part 2
    /**
     * @param string $yourString
     * @return string
     */
    function rtString(string $yourString) : string{
        return $yourString;
    }

    echo rtString("part 2") . "<br>";


    // part 3
    /**
     * @param string $string1
     * @param string $string2
     * @return string
     */
    function concatString(string $string1, string $string2) : string{
        return $string1 . " " . $string2;
    }

    echo concatString("part", "3") . "<br>";


    // part 4
    /**
     * @param int $nb1
     * @param int $nb2
     * @return string
     */
    function nb(int $nb1, int $nb2) : string {
        if ($nb1 > $nb2) {
            return " Le premier nombre est plus grand";
        }
        elseif ($nb1 < $nb2) {
            return "Le premier nombre est plus petit";
        }
        else {
            return "Les deux nombres sont identiques";
        }
    }

    echo nb(5, 8) . "<br>";


    // part 5
    /**
     * @param string $yourString
     * @param int $yourNumber
     * @return string
     */
    function concatStrInt(string $yourString, int $yourNumber) : string {
        return $yourString . " " . $yourNumber;
    }

    echo concatStrInt("part", 5) . "<br>";


    // part 6
    /**
     * @param string $name
     * @param string $firstName
     * @param int $age
     * @return string
     */
    function hello(string $name, string $firstName, int $age) : string{
        return "Bonjour " . $name . " " . $firstName . ", tu as " . $age . " ans";
    }

    echo hello("name", "firstName", 25) . "<br>";


    // part 7
    /**
     * @param string $gender
     * @param int $age
     * @return string
     */
    function genderAge(string $gender, int $age) : string{
        $thisAge = null;
        $thisGender = "";

        // gender
        if ($gender === "Homme") {
            $thisGender = "Vous êtes un homme";
        }
        elseif ($gender === "Femme") {
            $thisGender = "Vous êtes une femme";
        }

        // age
        if ($age > 18) {
            $thisAge = "vous êtes majeur.";
        }
        else {
            $thisAge = "vous êtes mineur.";
        }

        return $thisGender . " et " . $thisAge;
    }

    echo genderAge("Homme", 32) . "<br>";


    // part 8
    /**
     * @param int $nb1
     * @param int $nb2
     * @param int $nb3
     * @return int
     */
    function add3Number(int $nb1 = 1, int $nb2 = 1, int $nb3 = 1) : int{
        return $nb1 + $nb2 + $nb3;
    }

    echo add3Number(2, 5);
?>

</body>
</html>