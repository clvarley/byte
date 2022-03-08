<?php

namespace Clvarley\Byte\Stream;

use Clvarley\Byte\StreamInterface;

use function strlen;

/**
 * Represents a simple sequence of bytes
 *
 * Because PHP lacks a low-level type for handling bytes, we have to make use of
 * a string to store and work with our data.
 */
Class ByteStream Implements StreamInterface
{

    /**
     * @var string $bytes Byte string
     */
    protected $bytes;

    /**
     * @var int $position Current needle position
     */
    protected $position = 0;

    /**
     * Create a new byte stream using the given subject
     *
     * @param string $bytes Byte string
     */
    public function __construct( string $bytes = '' )
    {
        $this->bytes = $bytes;
    }

    /**
     * Returns the length of this stream in bytes
     *
     * @return int Stream length
     */
    public function length() : int
    {
        return strlen( $this->bytes );
    }

    /**
     * Returns the current position of the read/write needle
     *
     * @return int Needle position
     */
    public function position() : int
    {
        return $this->position;
    }

    /**
     * Check to see if we have reached the end of the stream
     *
     * @return bool End of stream
     */
    public function eof() : bool
    {
        return $this->position >= $this->length();
    }

    /**
     * Move the needle to the given position
     *
     * @param int $position New needle position
     */
    public function seek( int $position ) : void
    {
        $this->position = $position;
    }

    /**
     * Read a number of bytes from the stream
     *
     * @param int $length Read length
     * @return string     Bytes
     */
    public function read( int $length ) : string
    {
        // TODO
    }

    /**
     * Writes the given bytes to the stream
     *
     * @param string $bytes Bytes to write
     */
    public function write( string $bytes ) : void
    {
        // TODO
    }
}
