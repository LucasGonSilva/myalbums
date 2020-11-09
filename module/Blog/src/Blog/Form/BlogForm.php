<?php

namespace Blog\Form;

use Zend\Form\Form;

class BlogForm extends Form
{
    public function __construct($name = null)
    {
// we want to ignore the name passed
        parent::__construct('blog');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'Text',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => array(
                'label' => 'Title',
            ),
        ));
        $this->add(array(
            'name' => 'text',
            'type' => 'TextArea',
            'options' => array(
                'label' => 'Text',
            ),
        ));
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