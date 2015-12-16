<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'indexPost']) ?> </li>
        <li><?= $this->Html->link(__('Back to Post'), ['controller' => 'Posts', 'action' => 'view-post/'.$post_id]) ?></li>
    </ul>
</nav>
<div class="comments form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Add Comment') ?></legend>
        <?php
            $loginUsersId = $this->request->session()->read('Auth.User.id');
            echo $this->Form->hidden('comment_from',['value' => $loginUsersId]);
            echo $this->Form->input('comment_content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
