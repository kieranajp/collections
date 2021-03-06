<?php

// Copyright (c) Lellys Informática. All rights reserved. See License.txt in the project root for license information.
namespace Collections;

/**
 * Represents a write-enabled (mutable) sequence of key/value pairs
 * (i.e. a map).
 */
interface MapInterface extends
    ConstMapInterface,
    CollectionInterface,
    MapAccessInterface
{
    /**
     * Add a value to the collection and return the collection itself.
     *
     * It returns a shallow copy of the current collection, meaning changes
     * made to the current collection will be reflected in the returned
     * collection.
     *
     * @param $key - The key to set a value.
     * @param $value - The value to add.
     *
     * @return  - A shallow copy of the updated current collection itself.
     */
    public function add($key, $value);
}
