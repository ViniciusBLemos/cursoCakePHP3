<?php echo $this->Html->script('/webroot/tinymce/js/tinymce/tinymce.min.js', ['block' => 'script']);?>
<?php
    echo $this->Html->scriptBlock('
        tinymce.init({selector:".editor"});
    ', ['block' => 'script']);
?>
