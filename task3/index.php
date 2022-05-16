<?php
$arr = [];
$pos_count = [];
$neg_sum = [];
$new_arr = [];
if ($arr == null) {
    print_r($arr);
} else {
    foreach ($arr as $el) {
        $el > 0 ? $pos_count[] = $el : $neg_sum[] = $el;
    }

    $new_arr[] = count($pos_count);
    $new_arr[] = array_sum($neg_sum);
    $arr = $new_arr;
    print_r($arr);
}

//$el > 0 ? $pos_count[] = $el : ($el === 0 ? 'qwerty' : $neg_sum[] = $el);

if ($el > 0) {
    $pos_count[] = $el;
} elseif ($el === 0) {
    'qwerty';
} else {
    $neg_sum[] = $el;
}
//var_dump($i=[]);
