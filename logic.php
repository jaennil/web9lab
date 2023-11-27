<?php

require_once("function.php");

$x = -10;
$amount = 10000;
$step = 2;
$type = 'B';

$min_value = 10;
$max_value = 20;

$max = PHP_INT_MIN;
$min = PHP_INT_MAX;
$sum = 0;
$total = 0;
$average = 0;

switch ($type) {
    case 'A':
        for ($i = 0; $i < $amount; $i++, $x += $step) {
            $f = calculate($x);
            
            if ($f != "division by zero") {
                $total++;
                $sum+=$f;
                if ($f > $max) {
                    $max = $f;
                }
                if ($f < $min) {
                    $min = $f;
                }
                $sum += $f;
            }

            echo 'f(' . $x . ')=' . $f;
            if ($i < $amount - 1) {
                echo '<br>';
            }

            // if ($f>=$max_value) {
            //     echo "result: " . $f . "reached max value: " . $max_value . ". stopping";
            //     break;
            // }

            // if ($f<$min_value) {
            //     echo "result: " . $f . "reached min value: " . $min_value . ". stopping";
            //     break;
            // }
        }
        break;
    case 'B':
        echo '<ul>';
        for ($i = 0; $i < $amount; $i++, $x += $step) {
            $f = calculate($x);
             
            if ($f != "division by zero") {
                $total++;
                $sum+=$f;
                if ($f > $max) {
                    $max = $f;
                }
                if ($f < $min) {
                    $min = $f;
                }
                $sum += $f;
            }

            echo '<li>f(' . $x . ')=' . $f . '</li>';

            // if ($f>=$max_value) {
            //     echo "result: " . $f . "reached max value: " . $max_value . ". stopping";
            //     break;
            // }

            // if ($f<$min_value) {
            //     echo "result: " . $f . "reached min value: " . $min_value . ". stopping";
            //     break;
            // }
        }
        echo '</ul>';
        break;
    case 'C':
        echo "<ol>";
        for ($i = 0; $i < $amount; $i++, $x += $step) {
            $f = calculate($x);
            
            if ($f != "division by zero") {
                $total++;
                $sum+=$f;
                if ($f > $max) {
                    $max = $f;
                }
                if ($f < $min) {
                    $min = $f;
                }
                $sum += $f;
            }

            echo '<li>f(' . $x . ')=' . $f . "</li>";

            // if ($f>=$max_value) {
            //     echo "result: " . $f . "reached max value: " . $max_value . ". stopping";
            //     break;
            // }

            // if ($f<$min_value) {
            //     echo "result: " . $f . "reached min value: " . $min_value . ". stopping";
            //     break;
            // }
        }
        echo "</ol>";
        break;
    case 'D':
        echo "<table>";
        echo "<tr>";
        echo "<td>Номер строки</td>";
        echo "<td>Значение агрумента</td>";
        echo "<td>Значение функции</td>";
        for ($i = 0; $i < $amount; $i++, $x += $step) {
            $f = calculate($x);
           
            if ($f != "division by zero") {
                $total++;
                $sum+=$f;
                if ($f > $max) {
                    $max = $f;
                }
                if ($f < $min) {
                    $min = $f;
                }
                $sum += $f;
            }


            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $x . "</td>";
            echo '<td>' . $f . '</td>';

            // if ($f>=$max_value) {
            //     echo "result: " . $f . "reached max value: " . $max_value . ". stopping";
            //     break;
            // }

            // if ($f<$min_value) {
            //     echo "result: " . $f . "reached min value: " . $min_value . ". stopping";
            //     break;
            // }
            echo "</tr>";
        }
        break;
    case 'E':
        for ($i = 0; $i < $amount; $i++, $x += $step) {
            $f = calculate($x);
            if ($f != "division by zero") {
                $total++;
                $sum+=$f;
                if ($f > $max) {
                    $max = $f;
                }
                if ($f < $min) {
                    $min = $f;
                }
                $sum += $f;
            }
            echo '<div class="e-style-div">f(' . $x . ')=' . $f . "</div>";

            // if ($f>=$max_value) {
            //     echo "result: " . $f . "reached max value: " . $max_value . ". stopping";
            //     break;
            // }

            // if ($f<$min_value) {
            //     echo "result: " . $f . "reached min value: " . $min_value . ". stopping";
            //     break;
            // }
        }
        break;
}
?>