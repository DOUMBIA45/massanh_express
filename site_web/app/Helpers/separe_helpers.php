<?php

/**
 * Format number to separate thousands
 * Example 1000000 to 1 000 000
 */
function format_number($price) {
    return number_format($price, 0, '', ' ').' FCFA';
}


