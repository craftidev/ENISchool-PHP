<?php

echo 'Generating Pascal\'s triangle:<br/><br/>';


function pascals_triangle($triangle_height = 6)
{
    $output = [];

    for ($row = 0; $row < $triangle_height; $row++) {
        $new_row = [];

        for ($col = 0; $col <= $row; $col++) {
            if ($col == 0 || $col == $row) {
                $new_row[] = 1;
            } else {
                $new_row[] = $output[$row - 1][$col - 1] + $output[$row - 1][$col];
            }
        }

        $output[$row] = $new_row;
    }

    return $output;
}

function display_pascals_triangle($pascals_triangle)
{
    echo '<table border=3px>';
    for ($row = 0; $row < count($pascals_triangle); $row++) {
        echo '<tr>';
        for (
            $col = 0;
            $col < count($pascals_triangle[$row]);
            $col++
        ) {
            echo '<td>';
            echo $pascals_triangle[$row][$col];
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

$pascals_triangle = pascals_triangle(rand(1, 42));
display_pascals_triangle($pascals_triangle);
