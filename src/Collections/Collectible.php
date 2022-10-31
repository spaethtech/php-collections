<?php
declare(strict_types=1);

namespace SpaethTech\Collections;

use JsonSerializable;

/**
 * The default implementation for anything that is Collectible.
 *
 * Any object can be Collectible, but Collections may only consist of Collectibles.  However, inheritance allows for
 * similar but unique objects to be stored in the same Collection.
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 *
 */
abstract class Collectible implements JsonSerializable
{
    /**
     * Specify data which should be serialized to JSON.
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return array Returns data which can be serialized by `json_encode()`.
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    /**
     * Overrides the default string representation of the class.
     *
     * @return string Returns a JSON formatted string representation of this Collectible.
     */
    public function __toString()
    {
        // Return the array as a JSON string.
        return json_encode($this, JSON_UNESCAPED_SLASHES);
    }

}
