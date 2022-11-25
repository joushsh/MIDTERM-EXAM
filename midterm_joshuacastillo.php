<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        //JOSHUA F. CASTILLO
        //BSIT - 4

        //1. PHP Variables
        $name = "Joshua F. Castillo";
        $yearandsection = "BSIT - 4<br>";

        //2. PHP Echo
        echo $name. "<br>" .$yearandsection. "<br>";

        //3. PHP Data Types
        $string = "UGHH";
        $integer = 242424;
        $float = 24.2424;
        $boolean_true = TRUE;
        echo $string;
        echo "<br>";
        var_dump($integer);
        echo "<br>";
        var_dump($float);
        echo "<br>";
        echo $boolean_true;
        echo "<br><br>";

        //4. PHP Strings
        echo strlen("UGHHGHHHHGHGHHG");
        echo "<br>";

        //5. PHP Numbers
        var_dump(is_int($integer));
        echo "<br>";

        //6. PHP Math
        echo (pi());
        echo "<br>";

        //7. PHP Constant;
        define("hello", "AHHHHH");
        echo hello;
        echo "<br><br>";

        //8. PHP Operators;
        //Arithmetic
        echo 22 + 2;
        echo "<br>";
        echo 28 - 4;
        echo "<br>";
        echo 6 * 4;
        echo "<br>";
        echo 24 / 1;
        echo "<br>";
        echo 24 % 32;
        echo "<br><br>";

        // //PHP if..else feat. Logical Operators
        $username = "j0sh";
        $password = "uhhh";

        if ($username == "j0sh" && $password == "112235412") 
        {
            echo "Login Successful :D";
            echo "<br>";
        }
        else 
        {
            echo "Login Failed :(";
            echo "<br><br>";
        }

        //PHP Switch
        $kulay = "e";
        switch($kulay) {
            case 'a':
                echo "Manok";
                break;
            case 'b':
                echo "Tinola";
                break;
            case 'c':
                echo "BBQ";
                break;
            case 'd':
                echo "Adobo";
                break;
            case 'e':
                echo "Black<br><br>";
                break;
            case 'f':
                echo "AHHHHHHHHHHH";
                break;
        }

        //11. PHP Loops
        for($i=0; $i<=24; $i++) {
            echo $i;
            echo "<br>";
        }

        //12. PHP Functions
        function tapos() {
            echo "<br>";
            echo "TAPOS AHHHHHH";
        }
        tapos();      
    ?>
</body>
</html>