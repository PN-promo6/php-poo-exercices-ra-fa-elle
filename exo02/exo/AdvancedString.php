<?php

namespace exo;

class AdvancedString
{
    private $internalString;

    public function __construct($str)
    {
        $this->internalString = $str;
    }

    public function bold()
    {
        return "<b>" . $this->internalString . "</b>";
    }

    public function italic()
    {
        return "<i>" . $this->internalString . "</i>";
    }

    public function underline()
    {
        return "<u>" . $this->internalString . "</u>";
    }

    public function upperCase()
    {
        return strtoupper($this->internalString);
    }
}
