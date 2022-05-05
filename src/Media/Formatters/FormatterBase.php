<?php
namespace EnotasGw\Media\Formatters;

abstract class FormatterBase
{
    abstract public function encode($objData, &$contentType);
    abstract public function decode($encodedData);
}
