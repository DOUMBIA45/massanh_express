<?php

function dateToFrench($date){
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lun.', 'mar.', 'mer.', 'jeu.', 'vend.', 'sam.', 'dim.');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('Jan.', 'fév.', 'Mars.', 'Avril.', 'Mai.', 'Juin.', 'Juil.', 'Août.', 'Sept.', 'Oct.', 'Nov.', 'Déc.');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date("l j F Y", strtotime($date) )));
}

function getAge($date){
    return \Carbon\Carbon::parse($date)->age.' ans';
}


function arrayMonth($index){
    $months = array(
        1 => 'Jan.',
        2 => 'Fev.',
        3 => 'Mars.',
        4 => 'Avril.',
        5 => 'Mai',
        6 => 'Juin.',
        7 => 'Juil.',
        8 => 'Août.',
        9 => 'Sep.',
        10 => 'Oct.',
        11 => 'Nov.',
        12 => 'Déc.');
    return $months[$index];
}
