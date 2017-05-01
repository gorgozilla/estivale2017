<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

<script>
	$j(document).ready(function(){
	   $j("input[name='jform[username]']").val('<?php echo generateRandomString(); ?>');
	   
		$j("input[type='submit']").bind("click",function() 
		{ 

		}); 
	});
	
	$j(document).on('submit','#member-registration',function(){
			if ($j('#jform_profilepicture_file').get(0).files.length === 0) {
				alert("Veuillez sélectionner une photo"); 
				event.preventDefault(); 
			}
		$j("input[name='jform[name]']").val($j('#jform_estipress_firstname').val()+' '+$j('#jform_estipress_lastname').val());
	});
</script>
<div class="registration<?php echo $this->pageclass_sfx?>">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
	<p>
Le service de presse de l'Estivale vous communiquera l'acceptation ou le refus de votre demande par mail.</p>

<p>En cas de problème, ou pour tout renseignement complémentaire, n'hésitez pas à nous contacter par courriel à presse(at)estivale.ch</p>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
		<?php // Iterate through the form fieldsets and display each one. ?>
		<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			<?php $fields = $this->form->getFieldset($fieldset->name);?>
			<?php if (count($fields)):?>
				<fieldset>
				<?php // If the fieldset has a label set, display it as the legend. ?>
				<?php if (isset($fieldset->label)): ?>
					<legend><?php echo JText::_($fieldset->label);?></legend>
				<?php endif;?>
				<?php // Iterate through the fields in the set and display them. ?>
				<?php foreach ($fields as $field) : ?>
					<?php // If the field is hidden, just display the input. ?>
					<?php if ($field->hidden): ?>
						<?php echo $field->input;?>
					<?php else:?>
						<div class="form-group">
							<?php echo $field->label; ?>
							<?php if (!$field->required && $field->type != 'Spacer') : ?>
								<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
							<?php endif; ?>
								<?php echo $field->input;?>
						</div>
					<?php endif;?>
				<?php endforeach;?>
				</fieldset>
			<?php endif;?>
		<?php endforeach;?>

		<div class="form-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
				<a class="btn" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div>
		<?php echo JHtml::_('form.token');?>
	</form>
</div>
