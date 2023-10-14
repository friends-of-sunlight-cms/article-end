<?php

return function (array $args) {
    $args['conditions'][]='(art.time_end>' . time() . ' OR art.time=art.time_end)';
};