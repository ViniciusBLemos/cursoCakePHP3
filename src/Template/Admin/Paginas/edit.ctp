<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagina $pagina
 */
?>
<?php
$config = ['class' => 'form-control',
           'templates' => 'app_form',
           'label' => [
                'class' => 'col-sm-2 control-label'
            ]
    ];
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagina->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagina->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paginas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paginas form large-9 medium-8 columns content">
    <?= $this->Form->create($pagina, ['class' => 'form-horizontal']) ?>
    <fieldset>
        <legend><?= __('Edit Pagina') ?></legend>
        <?php
            echo $this->Form->control('titulo', $config);
            echo $this->Form->control('conteudo', array_merge($config, ['class' => 'form-control editor']));
            echo $this->Form->control('url', $config);
            echo $this->Form->control('categoria_id', $config);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit', ['class' => 'btn btn-primary'])) ?>
    <?= $this->Form->end() ?>
</div>

<?php echo $this->element('editor'); ?>
