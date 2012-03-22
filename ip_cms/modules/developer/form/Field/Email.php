<?php
/**
 * @package ImpressPages
 * @copyright   Copyright (C) 2012 ImpressPages LTD.
 * @license GNU/GPL, see ip_license.html
 */

namespace Modules\developer\form\Field;


class Email extends Field{
    
    public function __construct($options) {
        parent::__construct($options);
        $this->addValidator('Email');
    }
    
    public function render($doctype) {
        $attributesStr = '';

        return '<input class="ipfControlInput" name="'.htmlspecialchars($this->getName()).'" '.$this->getAttributesStr().' '.$this->getValidationAttributesStr().' type="email" value="'.htmlspecialchars($this->getDefaultValue()).'" />';
    }
    

    
}