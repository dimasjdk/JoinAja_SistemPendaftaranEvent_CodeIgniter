<?php

date_default_timezone_set('Asia/Jakarta');



if (date_default_timezone_get()) {

    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';

}



if (ini_get('date.timezone')) {

    echo 'date.timezone: ' . ini_get('date.timezone');

}



?>