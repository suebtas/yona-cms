<?php

namespace Clinic\Form\Question;

use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Clinic\Model\Office;
use Phalcon\Validation\Validator\PresenceOf;

class No1Form extends \Phalcon\Forms\Form
{

    public function initialize()
    {
        $no1_1_2 = new Text('no1_1_2', array(
            'required' => true,
            'placeholder' => 'กรอกคำถามพื้นที่',
        ));
        $this->add($no1_1_2);

        $no1_1_3_1 = new Select('no1_1_3_1', 
            Office::find(),
            array(
                'using' => array(
                    'id',
                    'name'
                ),
                'class'=>"select2_multiple form-control",
                'placeholder'=> "Select a state",
                'multiple'=>"multiple"
                )
            );
        $this->add($no1_1_3_1);


        $no1_1_3_2 = new Select('no1_1_3_2', 
            Office::find(),
            array(
                'using' => array(
                    'id',
                    'name'
                ),
                'class'=>"select2_multiple form-control",
                'placeholder'=> "Select a state",
                'multiple'=>"multiple"
                )
            );
        $this->add($no1_1_3_2);

        $no1_1_3_3 = new Select('no1_1_3_3', 
            Office::find(),
            array(
                'using' => array(
                    'id',
                    'name'
                ),
                'class'=>"select2_multiple form-control",
                'placeholder'=> "Select a state",
                'multiple'=>"multiple"
                )
            );
        $this->add($no1_1_3_3);

        $no1_1_3_4 = new Select('no1_1_3_4', 
            Office::find(),
            array(
                'using' => array(
                    'id',
                    'name'
                ),
                'class'=>"select2_multiple form-control",
                'placeholder'=> "Select a state",
                'multiple'=>"multiple"
                )
            );
        $this->add($no1_1_3_4);

    }

}
