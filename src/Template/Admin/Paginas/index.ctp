<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagina[]|\Cake\Collection\CollectionInterface $paginas
 */
?>

<div class="paginas index">
    <h3><?= __('Minhas Paginas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paginas as $pagina): ?>
            <tr>
                <td><?= $this->Number->format($pagina->id) ?></td>
                <td><?= h($pagina->titulo) ?></td>
                <td><?= h($pagina->url) ?></td>
                <td><?= h($pagina->created) ?></td>
                <td><?= h($pagina->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), [
                        'controller' => 'paginas',
                        'action' => 'views',
                        $pagina->id
                    ]); ?>
                    <?= $this->Html->link(__('Edit'), [
                        'controller' => 'paginas',
                        'action' => 'edit',
                        $pagina->id
                    ]); ?>
                    <?= $this->Form->postLink(__('Delete'), [
                        'controller' => 'paginas',
                        'action' => 'delete',
                        $pagina->id
                    ], ['confirm' => __('Tem certeza que deseja excluir o item # {0}?', $pagina->id)]); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <li><?= $this->Html->link(__('Nova Pagina'), [
                        'controller' => 'paginas',
                        'action' => 'add'
                    ]);?></li>
</div>

<?= $this->element('pagination'); ?>
