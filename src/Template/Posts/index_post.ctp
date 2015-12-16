<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php $loginUsersId = $this->request->session()->read('Auth.User.id'); ?>
        <li><?= $this->Html->link(__('Profile'), ['controller' => 'Users', 'action' => 'edit-user/'.$loginUsersId]) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'addPost']) ?></li>
    </ul>
</nav>
<div class="posts index large-9 medium-8 columns content">
    <h3><?= __('Posts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('post_content') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>
                <td><?= $this->Text->truncate(h($post->post_content),20); ?></td>
                <td><?= h($post->created) ?></td>
                <td><?= h($post->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'viewPost', $post->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
