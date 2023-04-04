<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($categoria->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($categoria->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoria->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoria->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paginas') ?></h4>
        <?php if (!empty($categoria->paginas)): ?>
            <ul>
                <?php foreach($categoria->paginas as $v):?>
                    <li><?php echo $v->id; ?> - <?php echo $v->titulo;?></li>
                <?php endforeach; ?>
            </ul>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Conteudo') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->paginas as $paginas): ?>
            <tr>
                <td><?= h($paginas->id) ?></td>
                <td><?= h($paginas->titulo) ?></td>
                <td><?= h($paginas->conteudo) ?></td>
                <td><?= h($paginas->url) ?></td>
                <td><?= h($paginas->categoria_id) ?></td>
                <td><?= h($paginas->created) ?></td>
                <td><?= h($paginas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paginas', 'action' => 'view', $paginas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paginas', 'action' => 'edit', $paginas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paginas', 'action' => 'delete', $paginas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paginas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
