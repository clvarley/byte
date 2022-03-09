<?php

namespace Clvarley\Byte;

use Clvarley\Byte\StreamInterface;

/**
 * Utility class with methods for reading data from a byte string
 */
Final Class ByteReader
{

    /**
     * @var StreamInterface $bytes Byte stream
     */
    private $bytes;

    /**
     * Creates a new reader around the given byte string
     *
     * @param StreamInterface $bytes Byte string
     */
    public function __construct( StreamInterface $bytes )
    {
        $this->bytes = $bytes;
    }

    public function readChar() : string
    {
        return $this->bytes->read( 1 );
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
