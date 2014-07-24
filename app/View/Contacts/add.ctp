<?php
/*
 * Form to add a contact to the address book
 */
?>
<div class="addressbook">
  <?= $this->element('addressbookmenu');?>
  <div class="add-contact">
    <h1>Add Contact</h1>
    <?php
      echo $this->Form->create('Contact');
      echo $this->Form->input('fname', array('label' => 'First Name'));
      echo $this->Form->input('lname', array('label' => 'Last Name'));
      echo $this->Form->input('phone', array('label' => 'Phone Number'));
      echo $this->Form->input('email', array('label' => 'Email Address'));
      echo $this->Form->end('Save Contact');
    ?>
  </div>
</div>