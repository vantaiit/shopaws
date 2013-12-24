<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12/21/13
 * Time: 11:02 AM
 * To change this template use File | Settings | File Templates.
 */

class Navigationwidget extends Cwidget
{
    public $message;

    public function init()
    {


    }

    public function run()
    {
        $parent = Category::model()->findAllByAttributes(array('status'=>1,'parent_id'=>0));
        $this->render('application.views.layouts.nav',
            array(
                'parent'=>$parent
            )
        );
    }
}
