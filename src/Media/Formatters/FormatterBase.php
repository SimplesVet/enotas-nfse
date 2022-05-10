<?php
namespace EnotasGw\V1\Media\Formatters;

abstract class FormatterBase
{
    abstract public function encode($objData, &$contentType);
    abstract public function decode($encodedData);
}
