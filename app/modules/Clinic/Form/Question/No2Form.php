<?php

namespace Clinic\Form\Question;

use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Clinic\Model\Office;
use Phalcon\Validation\Validator\PresenceOf;

class No2Form extends \Phalcon\Forms\Form
{

    public function initialize()
    {
        $no9_5_1 = new Text('no9_5_1', array(
            'required' => true,
            'placeholder' => 'กรอกชื่อผลิตภัณฑ์',
            'class' =>"form-control"
        ));
        $this->add($no9_5_1);
    }

}
