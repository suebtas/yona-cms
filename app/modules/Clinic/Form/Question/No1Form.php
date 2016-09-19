<?php

namespace Clinic\Form\Question;

use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Clinic\Model\Office;
use Clinic\Model\Tambon;
use Phalcon\Validation\Validator\PresenceOf;

class No1Form extends \Phalcon\Forms\Form
{    
    public function initialize()
    {
        $no1_1_2 = new Text('no1_1_2', array(
            'required' => true,
            'placeholder' => 'กรอกคำถามพื้นที่',
            'class' =>"form-control col-md-3 col-xs-6"
        ));
        $this->add($no1_1_2);

        $no1_1_3_1 = new Select('no1_1_3_1', 
            Tambon::find(),
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
            Tambon::find(),
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
            Tambon::find(),
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
                Tambon::find(),
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

        $title = '<i id="btnFinishStatus" class="glyphicon glyphicon-ok"></i> เสร็จสิ้นการสำรวจข้อมูล';
        $buttonFinish = new LinkTo('test', array('#', $title, 'id'=>'btnFinish', 'class'=>'btn btn-app', 'local'=>false));
        $this->add($buttonFinish);
    }

}



use Phalcon\Forms\Element;
use Phalcon\Forms\ElementInterface;
use Phalcon\Tag;

class LinkTo extends Element implements ElementInterface
{
    
    public function render($attributes = false)
    {
        return Tag::linkTo($this->prepareAttributes($attributes));
    }
}
