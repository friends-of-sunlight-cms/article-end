<?php

use Sunlight\Database\Database as DB;

return function (array $args) {
    $args['conditions'][] = '(art.time_end>' . time() . ' OR art.time_end ' . DB::equal(null) . ')';
};