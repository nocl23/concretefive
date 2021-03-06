<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="form-group">
	<label class="control-label"><?php echo $label?></label>
	<?php if ($description): ?>
	<i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?php echo $description?>"></i>
	<?php endif; ?>
	<div data-composer-field="name">
		<?php echo $form->text($this->field('name'), $control->getPageTypeComposerControlDraftValue(), ['autofocus' => 'autofocus'])?>
	</div>
</div>

<script type="text/javascript">
var concreteComposerAddPageTimer = false;
$(function() {
	var $urlSlugField = $('div[data-composer-field=url_slug] input');
	if ($urlSlugField.length) {
		$('div[data-composer-field=name] input').on('keyup', function() {
			var input = $(this);
			var send = {
				token: '<?php echo Loader::helper('validation/token')->generate('get_url_slug')?>',
				name: input.val()
			};
			var parentID = input.closest('form').find('input[name=cParentID]').val();
			if (parentID) {
				send.parentID = parentID;
			}
			clearTimeout(concreteComposerAddPageTimer);
			concreteComposerAddPageTimer = setTimeout(function() {
				$('.ccm-composer-url-slug-loading').show();
				$.post(
					'<?php echo REL_DIR_FILES_TOOLS_REQUIRED?>/pages/url_slug',
					send,
					function(r) {
						$('.ccm-composer-url-slug-loading').hide();
						$urlSlugField.val(r);
					}
				);
			}, 150);
		});
	}
});
</script>