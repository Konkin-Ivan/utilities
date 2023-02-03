<?php

function dump($str): array
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    die();
}
