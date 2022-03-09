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
        return $this->read( 'c', 1 );
    }

    public function readInt16() : int
    {
        return $this->read( 's', 2 );
    }

    public function readInt32() : int
    {
        return $this->read( 'l', 4 );
    }

    private function read( string $format, int $length ) : ?string
    {
        $segment = $this->bytes->read( $length );

        $result = unpack( $format, $segment );

        return $result[1] ?? null;
    }
}
