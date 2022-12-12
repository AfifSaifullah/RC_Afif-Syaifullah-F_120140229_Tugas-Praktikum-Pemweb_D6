<html>
    <body>
        <?php
            // Desimal ke Roman
            function intToRoman($num)
            {
                if($num > 3999) return "Bilangan terlalu besar!";

                //             1    5    10   50   100  500 1000
                $digit = array('I', 'V', 'X', 'L', 'C', 'D', 'M');
                $roman = "";

                for($i = 0; $i < 4 && $num != 0; $i++)
                {
                    $current_digit = $num % 10;

                    if($current_digit % 5 == 4)
                    {
                        $roman = $digit[($current_digit == 9) + $i*2 + 1] . $roman;
                        $current_digit -= 3;
                    }

                    while($current_digit % 5)
                    {
                        $roman = $digit[0 + $i*2] . $roman;
                        $current_digit--;
                    }

                    if($num % 5 != 4 && $current_digit == 5)
                        $roman = $digit[1 + $i*2] . $roman;

                    $num = intdiv($num, 10);
                }

                return $roman;
            }

            // Output
            echo intToRoman(2077);
        ?>
    </body>
</html>
