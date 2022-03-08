<?php

namespace Clvarley\Byte;

use function strlen;

/**
 * Represents a string of bytes
 *
 * Because PHP lacks a low-level type for handling bytes, we have to make use of
 * a string to store and work with our data.
 */
Class ByteString
{

    /**
     * @var string $bytes Byte string
     */
    protected $bytes;

    /**
     * Create a new byte string using the given subject
     *
     * @param string $bytes Byte string
     */
    public function __construct( string $bytes = '' )
    {
        $this->bytes = $bytes;
    }

    /**
     * Returns the length of this string in bytes
     */
    public function length() : int
    {
        return strlen( $this->bytes );
    }

    /**
     * Appends the given bytes onto the end of the string
     *
     * @param string $bytes Byte string
     */
    public function append( string $bytes ) : void
    {
        $this->bytes .= $bytes;
    }
}
