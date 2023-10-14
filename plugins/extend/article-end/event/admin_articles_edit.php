<?php

use Sunlight\Util\Form;

return function (array $args) {
    $args['output'] .= '<fieldset id="article-edit-time">
                            <legend>' . _lang('article-end.posted.end') . '</legend>'
                             . Form::editTime('time_end', $args['article']['time_end'] ?? time(), ['input_class' => 'inputmax', 'now_toggle' => true, 'now_toggle_default' => ($args['article']['id'] == -1)]) . '
                        </fieldset>';
};