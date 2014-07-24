<?php
/*
 * Full display of address book contents
 */
?>
<div class="addressbook">
  <?= $this->element('addressbookmenu');?>
  <div class="search-bar">
  <?php
    echo $this->Form->create('Contact');
    echo $this->Form->input('name', array('label' => '', 'placeholder' => 'Search for a name'));
    echo $this->Form->end('Search');
  ?>
  </div>
  <div class="contact-list">
  <h1>My Contacts (<?php echo sizeOf($contacts)?>)</h1>
    <ul>
      <?php
        //Display a list of all contacts under a header for each number

	//Check first letter
	$first = 'A';
	foreach ($contacts as $contact) {
	  $fname = $contact['Contact']['fname'];
          $lname = $contact['Contact']['lname'];
	  $fnameuc = ucwords($fname);
          if ($fnameuc[0] != $first) {
	  $first = $fnameuc[0];
      ?>
      <li class="letter-header"><?=$first;?></li>
      <?php } ?>
      <li><?=$this->Html->link($fname." ".$lname, array('controller' => 'contacts', 'action' => 'view', $contact['Contact']['id']));?></li>
      <?php } ?>
      <?php if (sizeOf($contacts) == 0) {?>
      <li>No Contacts Found</li>
      <?php } ?>
    </ul>
  </div>
</div>
	