<?php

$i = "2016-12-23";

if(substr($i, 0, 4) >= (date("Y") - 13)) {
    echo substr($i, 0, 4);
} else echo "Underage";