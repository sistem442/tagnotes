<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/tag-it.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<link href="/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
    
    $(document).ready(function() {
        //TO DO instead of sample tags list real tags
        var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', 'erlang', 'apl', 'cobol', 'go', 'lua'];
        $('#singleFieldTags').tagit({
       availableTags: sampleTags,
       // This will make Tag-it submit a single form value, as a comma-delimited field.
       singleField: true,
       singleFieldNode: $('#NoteTest')
       });

    });
</script>
<div class="notes form">
<?php echo $this->Form->create('Note'); ?>
    <fieldset>
        <legend><?php echo __('Edit Note'); ?></legend>
<?php
        echo $this->Form->input('id');
        echo $this->Form->input('name');
        echo $this->Form->input('content');
        echo $this->Form->input('status');
        echo $this->Form->input('keywords');
        echo $this->Form->input('Tag');
        echo $this->Form->input('test');//field for transfering tags to backend

?>

        <ul id="singleFieldTags" class="tagit ui-widget ui-widget-content ui-corner-all">
        </ul>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Note.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Note.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Uploads'), array('controller' => 'file_uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Upload'), array('controller' => 'file_uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Shares'), array('controller' => 'users_shares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Share'), array('controller' => 'users_shares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
