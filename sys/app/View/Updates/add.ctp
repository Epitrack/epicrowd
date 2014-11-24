<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Update</h1>
<?php
echo $this->Form->create('Update');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('organization');
echo $this->Form->input('country_id', array(
    'options' => $countries,
    'empty' => '(choose one)'
));
echo $this->Form->end('Save Post');
?>