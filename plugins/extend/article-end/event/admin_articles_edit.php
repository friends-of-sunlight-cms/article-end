<?php

use Sunlight\Util\Form;

return function (array $args) {
    $args['output'] .= _buffer(function () use ($args) { ?>
        <fieldset id="article-edit-time">
            <legend><?= _lang('article-end.posted.end') ?></legend>
            <?= Form::editTime('time_end', $args['article']['time_end'] ?? null, [
                'input_class' => 'inputmax',
            ]) ?>
        </fieldset>
    <?php });
};
