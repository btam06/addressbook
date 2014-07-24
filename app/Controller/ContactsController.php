<?php
class ContactsController extends AppController {
  public $helpers = array('Html', 'Form');

  //Display all contacts
  public function index() {

    if ($this->request->is('post')) {
      $data = $this->request->data;
      if (isset($data['Contact']['name'])) {
	$contacts = $this->Contact->find('all', array(
						      'conditions' => array(
									    'CONCAT(Contact.fname, " ", Contact.lname) LIKE' => '%'.$data['Contact']['name'].'%'
									    ),
						      'order' => array('fname ASC')
						      )
					 
					 );
	$this->set('contacts', $contacts);
      }
    } else {

      //Get all contact details
      $this->set('contacts', $this->Contact->find('all', array('order' => array('fname ASC'))));
    }
  }

  //View a specific contact's details
  public function view($id) {

    //Check if an ID has been sent
    if ($id) {

      //Check if the contact exists
      $contact = $this->Contact->findById($id);
      if ($contact) 

	//Set contact details
	$this->set('contact', $contact);
    }
  }

  //Add a contact to the database
  public function add() {
    //Check if data has been posted
    if ($this->request->is('post')) {
       
      //Create a new contact
      $this->Contact->create();

      //Save added contact information
      if ($this->Contact->save($this->request->data)) {
	$this->Session->setFlash(__('Contact has been added'));
	return $this->redirect(array('action' => 'index'));
      }
    }
  }

  //Delete a contact from the database
  public function delete($id) {
    
    //Check if an ID has been sent
    if ($id) {

      //Check if the contact actually exists
      $contact  = $this->Contact->findById($id);
      if ($contact) {

	//Delete the contact
	$this->Contact->delete($id);
	$this->Session->setFlash(__('Contact Deleted'));

      }
    }
    return $this->redirect(array('action' => 'index'));
  }

}
?>