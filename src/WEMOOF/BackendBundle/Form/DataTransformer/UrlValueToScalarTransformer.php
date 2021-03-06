<?php

namespace WEMOOF\BackendBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use WEMOOF\BackendBundle\Value\UrlValue;

class UrlValueToScalarTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        /** @var UrlValue $value */
        return (string)$value;
    }

    public function reverseTransform($value)
    {
        return UrlValue::parse($value);
    }
}