<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><?= $this->Html->link(__('Add Posts'), ['controller' => 'Posts', 'action' => 'addPost']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
           // echo $this->Form->input('facebook_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
