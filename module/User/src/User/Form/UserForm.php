<?php

namespace User\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($name = null)
    {
// we want to ignore the name passed
        parent::__construct('user');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'firstname',
            'type' => 'Text',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => array(
                'label' => 'First Name',
            ),
        ));
        $this->add(array(
            'name' => 'lastname',
            'type' => 'Text',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => array(
                'label' => 'Last Name',
            ),
        ));

        //E-mail User
        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => array(
                'label' => 'Email',
            ),
        ));

        //E-mail User
//        $this->add(array(
//            'name' => 'password',
//            'type' => 'Password',
//            'attributes' => [
//                'class' => 'form-control'
//            ],
//            'options' => array(
//                'label' => 'Password',
//            ),
//        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Cadastrar',
                'id' => 'submitbutton',
                'class' => 'btn btn-success'
            ),
        ));
    }
}