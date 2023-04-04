<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagina[]|\Cake\Collection\CollectionInterface $paginas
 */
?>

<div>
    <h3><?= __('Minhas Paginas') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="text-right"><?= __('Actions') ?></th>
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
                <td class="text-right">
                    <?= $this->Html->link(__('View'), [
                        'controller' => 'paginas',
                        'action' => 'view',
                        $pagina->id
                        ],
                        ['class' => 'btn btn-success btn-xs']
                    ); ?>
                    <?= $this->Html->link(__('Edit'), [
                        'controller' => 'paginas',
                        'action' => 'edit',
                        $pagina->id
                        ],
                        ['class' => 'btn btn-primary btn-xs']
                    ); ?>
                    <?= $this->Form->postLink(__('Delete'), [
                        'controller' => 'paginas',
                        'action' => 'delete',
                        $pagina->id
                        ],
                        [
                            'confirm' => __('Tem certeza que deseja excluir o item # {0}?', $pagina->id),
                            'class' => 'btn btn-danger btn-xs'
                        ]

                    ); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <li><?= $this->Html->link(__('Nova Pagina'), [
                        'controller' => 'paginas',
                        'action' => 'add'
                    ],
                    [
                        'class' => 'btn btn-primary btn-lg'
                    ]
            );
        ?>
    </li>
</div>

<?= $this->element('pagination'); ?>
