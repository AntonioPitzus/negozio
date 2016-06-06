<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Fiscal Code') ?></th>
            <td><?= h($customer->fiscal_code) ?></td>
        </tr>
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($customer->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($customer->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($customer->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($customer->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Paymentcode') ?></th>
            <td><?= $this->Number->format($customer->paymentcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthdate') ?></th>
            <td><?= h($customer->birthdate) ?></td>
        </tr>
    </table>
</div>
