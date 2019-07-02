<?php
$language_page_statement = get_option('default_language_page_statement');
$contributor_page_statement = get_option('default_contributor_page_statement');
$coverage_page_statement = get_option('default_coverage_page_statement');
$creator_page_statement = get_option('default_creator_page_statement');
$date_page_statement = get_option('default_date_page_statement');
$description_page_statement = get_option('default_description_page_statement');
$format_page_statement = get_option('default_format_page_statement');
$identifier_page_statement = get_option('default_identifier_page_statement');
$publisher_page_statement = get_option('default_publisher_page_statement');
$relation_page_statement = get_option('default_relation_page_statement');
$rights_page_statement = get_option('default_rights_page_statement');
$source_page_statement = get_option('default_source_page_statement');
$subject_page_statement = get_option('default_subject_page_statement');
$title_page_statement = get_option('default_title_page_statement');
$type_page_statement = get_option('default_type_page_statement');
$view = get_view();
?>
<div class="field">
	<h3>Default Contributor</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
                <?php echo $view->formTextarea('contributor_page_statement', $contributor_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
            </div>
            <label class="use-html">Use HTML
				<input type="hidden" name="contributor_page_statement-html" value="0">
				<input type="checkbox" name="contributor_page_statement-html" id="contributor_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_contributor_page_statement'))):?>checked="checked" <?php endif;?>>
			</label>
			<p class="explanation">
				Add or edit this Contributor entry. This will be added to the Dublin Core Contributor field automatically when a new or exising record is saved, but if and only if that field is empty.
			</p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Coverage</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('coverage_page_statement', $coverage_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
            </div>
            <label class="use-html">Use HTML
			<input type="hidden" name="coverage_page_statement-html" value="0">
			<input type="checkbox" name="coverage_page_statement-html" id="coverage_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_coverage_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Coverage entry.  This will be added to the Dublin Core Coverage field automatically when a new or exising record is saved, but if and only if that field is empty.  Consult http://www.getty.edu/research/tools/vocabularies/tgn/index.html for help with geographic names.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Creator</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('creator_page_statement', $creator_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="creator_page_statement-html" value="0">
			<input type="checkbox" name="creator_page_statement-html" id="creator_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_creator_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Creator entry.  This will be added to the Dublin Core Creator field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Date</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('date_page_statement', $date_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="date_page_statement-html" value="0">
			<input type="checkbox" name="date_page_statement-html" id="date_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_date_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Date entry.  This will be added to the Dublin Core Date field automatically when a new or exising record is saved, but if and only if that field is empty.  Consulte https://www.w3.org/TR/NOTE-datetime for help with standard date formats.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Description</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('description_page_statement', $description_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="description_page_statement-html" value="0">
			<input type="checkbox" name="description_page_statement-html" id="description_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_description_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Description entry.  This will be added to the Dublin Core Description field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Format</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('format_page_statement', $format_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="format_page_statement-html" value="0">
			<input type="checkbox" name="format_page_statement-html" id="format_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_format_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Format entry.  This will be added to the Dublin Core Format field automatically when a new or exising record is saved, but if and only if that field is empty.  Consult https://www.iana.org/assignments/media-types/media-types.xhtml for help with media types.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Identifier</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('identifier_page_statement', $identifier_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="identifier_page_statement-html" value="0">
			<input type="checkbox" name="identifier_page_statement-html" id="identifier_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_identifier_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Identifier entry.  This will be added to the Dublin Core Identifier field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Language</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('language_page_statement', $language_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="language_page_statement-html" value="0">
			<input type="checkbox" name="language_page_statement-html" id="language_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_language_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Language entry.  This will be added to the Dublin Core Language field automatically when a new or exising record is saved, but if and only if that field is empty.  Consult https://www.ietf.org/rfc/rfc4646.txt for help with language standards.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Publisher</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('publisher_page_statement', $publisher_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="publisher_page_statement-html" value="0">
			<input type="checkbox" name="publisher_page_statement-html" id="publisher_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_publisher_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Publisher entry.  This will be added to the Dublin Core Publisher field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Relation</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('relation_page_statement', $relation_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="relation_page_statement-html" value="0">
			<input type="checkbox" name="relation_page_statement-html" id="relation_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_relation_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Relation entry.  This will be added to the Dublin Core Relation field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Rights</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('rights_page_statement', $rights_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
				<input type="hidden" name="rights_page_statement-html" value="0">
				<input type="checkbox" name="rights_page_statement-html" id="rights_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_rights_page_statement'))):?>checked="checked" <?php endif;?>>
			</label>
        <p class="explanation">
            Add or edit this Rights entry.  This will be added to the Dublin Core Rights field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Source</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('source_page_statement', $source_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="source_page_statement-html" value="0">
			<input type="checkbox" name="source_page_statement-html" id="source_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_source_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Source entry.  This will be added to the Dublin Core Source field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Subject</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('subject_page_statement', $subject_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="subject_page_statement-html" value="0">
			<input type="checkbox" name="subject_page_statement-html" id="subject_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_subject_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Subject entry.  This will be added to the Dublin Core Subject field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Title</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('title_page_statement', $title_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="title_page_statement-html" value="0">
			<input type="checkbox" name="title_page_statement-html" id="title_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_title_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Title entry.  This will be added to the Dublin Core Title field automatically when a new or exising record is saved, but if and only if that field is empty.
        </p>
        </div>
    </div>
</div>

<div class="field">
	<h3>Default Type</h3>
    <div class="inputs">
        <div class="input-block">
            <div class="input">
				<?php echo $view->formTextarea('type_page_statement', $type_page_statement, array('rows' => '3', 'cols' => '50', 'class' => array('textinput'))); ?>
			</div>
            <label class="use-html">Use HTML
			<input type="hidden" name="type_page_statement-html" value="0">
			<input type="checkbox" name="type_page_statement-html" id="type_page_statement-html" value="1" class="use-html-checkbox" <?php if($this->isHTML(get_option('default_type_page_statement'))):?>checked="checked" <?php endif;?>>
		</label>
        <p class="explanation">
            Add or edit this Type entry.  This will be added to the Dublin Core Type field automatically when a new or exising record is saved, but if and only if that field is empty.  Consulte http://dublincore.org/documents/dcmi-type-vocabulary/ for type vocabulary.
        </p>
        </div>
    </div>
</div>
<script>
jQuery( document ).ready(function() {
	Omeka.wysiwyg({
		selector: false,
        menubar: 'edit view insert format table',
        plugins: 'lists link code paste media autoresize image table charmap hr',
        browser_spellcheck: true
    });
	
	var inputs = jQuery(document).find('div.inputs .use-html-checkbox');
	inputs.each(function () {
		var textarea = jQuery(this).parents('.input-block').find('textarea');
		if (textarea.length) {
			var textareaId = textarea.attr('id');
			var enableIfChecked = function () {
				if (this.checked) {
					tinyMCE.EditorManager.execCommand("mceAddEditor", true, textareaId);
				} else {
					tinyMCE.EditorManager.execCommand("mceRemoveEditor", true, textareaId);
				}
			};

			enableIfChecked.call(this);

			// Whenever the checkbox is toggled, toggle the WYSIWYG editor.
			jQuery(this).click(enableIfChecked);
		}
	});
});
</script>