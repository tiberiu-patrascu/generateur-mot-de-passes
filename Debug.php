<?php

function debug($var = null)
{
    echo "<div class='debug'>";
    echo "<pre>";
    echo "<h3>" . gettype($var) . "</h3>";
    echo var_export($var, true);
    echo "</pre>";
    echo "</div>";
}