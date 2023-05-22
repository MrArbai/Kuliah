<?php

function getStatus($input) {
    static $counter = 0;
    static $status = 'Hijau';

    if ($input == 0) {
        return $status;
    } else {
        $counter++;
        if ($counter == $input) {
            $status = ($status == 'Hijau') ? 'Merah' : 'Hijau';
            $counter = 0;
            if ($status == 'Merah') {
                return $status;
            } else {
                return 'Kosong';
            }
        } else {
            return 'Kosong';
        }
    }
}
$inputValues = [1, 0, 5, 1, 0, 1, 3];

foreach ($inputValues as $input) {
    $output = getStatus($input);
    echo $output . "\n";
}
