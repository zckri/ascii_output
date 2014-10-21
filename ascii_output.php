<?php

$arr = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
        'Stuff' => 'Random',
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue',
        'Stuff' => '',
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink',
        'Stuff' => 'Anything',
        ),
);

function printArray($input) {

    $colors = array(
            'pink' => "\e[45m",
            'blue' => "\e[46m",
            'green' => "\e[42m",
            'default' => "\e[0m",
        );


    $units = count($input[0]);
    $fmtString = "| " . implode(' | ', array_fill(0,$units,'%-12s')) . " |\n";

    krsort($input[0]);
    $header = vsprintf($fmtString, array_keys($input[0]));
    $div = implode(array_fill(0,$units,'--------------+'));

    printf("+%s\n",$div);
    echo $header;
    printf("+%s\n",$div);
    foreach($input as $row) {
        krsort($row);
        printf($colors[strtolower($row['Color'])]);
        foreach($row as $k=>$val) {
            printf("| %-12s ", $val);
        }
        printf($colors['default']);
        printf("|\n+%s\n",$div);
    }
}

printArray($arr);