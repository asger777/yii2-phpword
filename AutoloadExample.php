<?php

namespace m0zart89\phpword;

use

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function run()
    {
        $templateProcessor = new TemplateProcessor('Template.docx');
        return "Hello!";
    }
}
