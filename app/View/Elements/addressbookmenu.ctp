<?php
/*
 * Display the top menu for the address book to select navigation options
 */
?>
<div class="nav">
  <ul>
    <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'index'));?></li>
    <li><?php echo $this->Html->link('Contacts', array('controller' => 'contacts', 'action' => 'index'));?></li>
    <li><?php echo $this->Html->link('Add Contact', array('controller' => 'contacts', 'action' => 'add'));?></li>
  </ul>
</div>