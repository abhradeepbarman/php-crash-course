<?php

$abc = null;
$dbc = $abc ?? "default";

var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == [],
    $abc,
    is_null($abc),
    $dbc
);