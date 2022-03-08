<?php

namespace Clvarley\Byte;

use Clvarley\Byte\ByteString;

/**
 * Utility class with methods for reading data from a byte string
 */
Final Class ByteReader
{

    /**
     * @var ByteString $bytes
     */
    private $bytes;

    /**
     * Creates a new reader around the given byte string
     *
     * @param ByteString $bytes Byte string
     */
    public function __construct( ByteString $bytes )
    {
        $this->bytes = $bytes;
    }

    public function readChar() : string
    {

    }

    public function readInt8() : int
    {

    }

    public function readInt16() : int
    {

    }

    public function readInt32() : int
    {

    }
}
