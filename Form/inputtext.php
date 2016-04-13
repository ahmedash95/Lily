<?php

namespace Lily\Core\Form;

class inputtext extends Input implements InputInterface
{
    public function inputHTML()
    {
        return '<input type="text"'.$this->_inputAttributesString.' />';
    }
}
