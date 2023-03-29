<div class="user form">
    <?php echo $this->Form->create(); ?>
    <fieldset>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?php echo $this->Form->button('Acessar'); ?>
    <?php echo $this->Form->end(); ?>
</div>
