<?php

namespace app\widgets;

use Yii;

class HelloWorld extends \yii\bootstrap5\Widget
{
    public $message = 'Hello World';

    public function run()
    {
        return '<div>' . $this->message . '</div>';
    }
}