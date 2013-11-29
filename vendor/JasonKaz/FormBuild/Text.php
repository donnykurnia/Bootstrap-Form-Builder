<?php
namespace JasonKaz\FormBuild;

class Text extends GeneralInput
{
    public function __construct($Attribs = [])
    {
        $this->Attribs = $Attribs;
        $this->setAttributeDefaults(['class' => 'form-control']);

        parent::__construct('text', $this->Attribs);
    }
}
