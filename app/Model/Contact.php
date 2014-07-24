<?php
class Contact extends AppModel {
  public $validate = array(
			   'fname' => array(
					    'rule' => '/^[A-z]+/i',
					    'message' => 'Enter a First Name containing only letters',
					    
					    ),
			   
			   'lname' => array(   					  
					    'rule' => '/^[A-z]+/i',
					    'message' => 'Enter a Last Name containing only letters'
										  ),
			   'phone' => array(
					    'rule' => array('phone', null, 'us'),
					    'message' => 'Enter a 10 digit phone number'
					    
					   
					    ),
			   'email' => array(
					    'rule' => 'email',
					    'message' => 'Enter a valid email address',
					    )
			   );
  
}
?>