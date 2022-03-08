<?php

namespace Clvarley\Byte;

/**
 * Common functionality required by all byte stream implementations
 */
Interface StreamInterface
{

    /**
     * Return the length in bytes of this stream
     *
     * Some streams may not be able to tell how many bytes are left to read, in
     * those cases they may return `-1` to indicate an unknown length.
     *
     * @return int Stream length
     */
    public function length() : int;

    /**
     * Return the current position of the read/write needle
     *
     * @return int Needle position
     */
    public function position() : int;

    /**
     * Check to see if we've reached the end of the stream
     *
     * @return bool End of stream
     */
    public function eof() : bool;

    /**
     * Move the read/write needle to a given position
     *
     * @param int $position New needle position
     */
    public function seek( int $position ) : void;

    /**
     * Read and return the given number of bytes from the stream
     *
     * Will read `$length` number of bytes from where the current stream needle
     * is located.
     *
     * @param int $length Read length
     * @return string     Bytes
     */
    public function read( int $length ) : string;

    /**
     * Write the given bytes to the stream
     *
     * Will write `$bytes` to the current location of the stream needle. To
     * append to the end of the stream, you must first seek to the end.
     *
     * @param string $bytes Bytes to write
     */
    public function write( string $bytes ) : void;

}
