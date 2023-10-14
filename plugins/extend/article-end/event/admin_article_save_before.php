<?php

use Sunlight\Util\Form;

return function (array $args) {
    $args['changeset']['time_end'] = Form::loadTime('time_end', $args['changeset']['time']);
};