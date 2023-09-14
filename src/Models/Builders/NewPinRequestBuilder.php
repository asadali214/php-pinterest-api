<?php

declare(strict_types=1);

/*
 * PinterestAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PinterestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use PinterestAPILib\Models\MediaSourceFile;
use PinterestAPILib\Models\NewPinRequest;

/**
 * Builder for model NewPinRequest
 *
 * @see NewPinRequest
 */
class NewPinRequestBuilder
{
    /**
     * @var NewPinRequest
     */
    private $instance;

    private function __construct(NewPinRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new pin request Builder object.
     */
    public static function init(string $boardId, MediaSourceFile $mediaSource): self
    {
        return new self(new NewPinRequest($boardId, $mediaSource));
    }

    /**
     * Sets link field.
     */
    public function link(?string $value): self
    {
        $this->instance->setLink($value);
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets dominant color field.
     */
    public function dominantColor(?string $value): self
    {
        $this->instance->setDominantColor($value);
        return $this;
    }

    /**
     * Sets alt text field.
     */
    public function altText(?string $value): self
    {
        $this->instance->setAltText($value);
        return $this;
    }

    /**
     * Sets board section id field.
     */
    public function boardSectionId(?string $value): self
    {
        $this->instance->setBoardSectionId($value);
        return $this;
    }

    /**
     * Sets parent pin id field.
     */
    public function parentPinId(?string $value): self
    {
        $this->instance->setParentPinId($value);
        return $this;
    }

    /**
     * Initializes a new new pin request object.
     */
    public function build(): NewPinRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
