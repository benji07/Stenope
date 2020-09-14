<?php

/*
 * This file is part of the "Tom32i/Content" bundle.
 *
 * @author Thomas Jarrand <thomas.jarrand@gmail.com>
 */

namespace Content\Service;

class HtmlUtils
{
    /**
     * Add class to the given element
     */
    public static function addClass(\DomElement $element, string $class): void
    {
        $element->setAttribute('class', implode(' ', array_filter([
            trim($element->getAttribute('class')),
            $class,
        ])));
    }

    /**
     * Set element HTML content
     */
    public static function setContent(\DomElement $element, string $content): void
    {
        $element->nodeValue = '';

        $child = $element->ownerDocument->createDocumentFragment();

        $child->appendXML($content);

        $element->appendChild($child);
    }
}