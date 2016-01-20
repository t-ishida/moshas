<?php
namespace Moshas\WebSite\Definition;
use Moshas\WebSite\FieldDataBuilder;
use Moshas\WebSite\FieldDefinition;

class TitleDefinition extends FieldDefinition implements FieldDataBuilder
{
    public function __construct($query)
    {
        parent::__construct($query, $this);
    }

    public function setTo($text, $entity)
    {
        $entity->setSubject($text);
    }

    public function build($item)
    {
        return $item->textContent;
    }
}