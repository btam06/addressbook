<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

/*
Address Book
A basic coding sample showing address book functionality using cakePHP MVC framework
Brian Tam 2014
*/


//Application description
?>

<div class="overview">
     <h2>Address Book</h2>
	<h3>Overview</h3>
	A code sample by Brian Tam.  This application is a simple address book to store a list of contacts including
	<ul>
		<li>First Name</li>
		<li>Last Name</li>
		<li>Phone Number</li>
		<li>Email Address</li>
	</ul>

	<h3>Functionality</h3>
	<ul>
		<li>Add Contact - Add a contact to the list of available contacts.</li>
		<li>Show Contacts - Show a list of contacts, click to display a detailed view of a contact.</li>
		<li>Search - Search for contacts based on their first or last name.</li>
	</ul>
	<?php echo $this->Html->link('Try it out', array('controller' => 'Contacts', 'action' =>'index')); ?>
</div>

