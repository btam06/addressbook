<?php
/*
 * Display a specific contact's information
 */
?>
<div class="addressbook">
  <?php echo $this->element('addressbookmenu');?>
  <div class="details">
  <?php if ($contact) {?>
  <h1><?=$contact['Contact']['fname']." ".$contact['Contact']['lname']?></h1>
    <table>
      <tr>
        <td>Phone Number</td><td>:</td><td><?=$contact['Contact']['phone']?></td>
      </tr>
      <tr>
        <td>Email Address</td><td>:</td><td><?=$contact['Contact']['email']?></td>
      </tr>
    </table>
    <?php echo $this->Html->link('Delete Contact', array('controller' => 'contacts', 'action' => 'delete', $contact['Contact']['id'])); ?>
  <?php } else { ?>
    <h1>No Contact Details Found</h1>
  <?php } ?>
  </div>
</div>