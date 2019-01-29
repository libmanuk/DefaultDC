<?php
$lang_page_statement = get_option('default_lang_page_statement');
$view = get_view();
?>

contributor

coverage

creator

date

description

format

identifier


https://www.ietf.org/rfc/rfc4646.txt
<div class="field">
    <h3>Default Language</h3>
    <div class="inputs">
        <?php echo $view->formTextarea('lang_page_statement', $lang_page_statement, array('rows' => '1', 'cols' => '30', 'class' => array('textinput'))); ?>
        <p class="explanation">
            Add or edit this Language entry.  This will be added to the Dublin Core Language field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
    </div>
</div>

publisher

relation

rights

source

subject

title

type (Collection , Dataset , Event , Image , InteractiveResource , MovingImage , PhysicalObject , Service , Software , Sound , StillImage , Text)


