<?php

declare(strict_types=1);

/*
 * PinterestAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PinterestAPILib\Models;

use stdClass;

class AllBoards implements \JsonSerializable
{
    /**
     * @var Board[]
     */
    private $items;

    /**
     * @var string
     */
    private $bookmark;

    /**
     * @param Board[] $items
     * @param string $bookmark
     */
    public function __construct(array $items, string $bookmark)
    {
        $this->items = $items;
        $this->bookmark = $bookmark;
    }

    /**
     * Returns Items.
     *
     * @return Board[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @required
     * @maps items
     *
     * @param Board[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Bookmark.
     */
    public function getBookmark(): string
    {
        return $this->bookmark;
    }

    /**
     * Sets Bookmark.
     *
     * @required
     * @maps bookmark
     */
    public function setBookmark(string $bookmark): void
    {
        $this->bookmark = $bookmark;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['items']    = $this->items;
        $json['bookmark'] = $this->bookmark;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
