<?php
declare(strict_types = 1);

namespace parallel;

use parallel\Channel\Error\Closed;
use parallel\Channel\Error\Existence;
use parallel\Channel\Error\IllegalValue;

if (!\class_exists('\\parallel\\Channel')) {
/**
 * Unbuffered Channels
 *  An unbuffered channel will block on calls to {@see Channel::send()} until there is a reciever, and block on calls to
 *   {@see Channel::recv()} until there is a sender. This means an unbuffered channel is not only a way to share data
 *   among tasks but also a simple method of synchronization.
 *
 *  An unbuffered channel is the fastest way to share data among tasks, requiring the least copying.
 *
 * Buffered Channels
 *  A buffered channel will not block on calls to {@see Channel::send()} until capacity is reached, calls to
 *   {@see Channel::recv()} will block until there is data in the buffer.
 *
 * Closures over Channels
 *  A powerful feature of parallel channels is that they allow the exchange of closures between tasks (and runtimes).
 *
 *  When a closure is sent over a channel the closure is buffered, it doesn't change the buffering of the channel
 *   transmitting the closure, but it does effect the static scope inside the closure: The same closure sent to
 *   different runtimes, or the same runtime, will not share their static scope.
 *
 *  This means that whenever a closure is executed that was transmitted by a channel, static state will be as it was when the closure was buffered.
 */
final class Channel {
    /* Constant for Infinitely Buffered */
    public const Infinite = -1;

    /**
     * Shall make a buffered channel with the given name and capacity.
     *
     * @param string   $name
     * @param int|null $capacity
     *
     * @return Channel
     *
     * @throws Existence if channel already exists.
     */
    public static function make(string $name, int $capacity = null): Channel {}

    /**
     * Shall open the channel with the given name.
     *
     * @param string $name
     *
     * @return Channel
     *
     * @throws Existence if channel does not exist.
     */
    public function open(string $name): Channel {}

    /**
     * Shall open the channel with the given name.
     *
     * @return mixed
     *
     * @throws Existence if channel does not exist.
     */
    public function recv() {}

    /**
     * Shall send the given value on this channel
     *
     * @param mixed $value
     *
     * @throws Closed       if channel is closed.
     * @throws IllegalValue if value is illegal.
     */
    public function send($value): void {}

    /**
     * Shall close this channel.
     *
     * @throws Closed if channel is closed.
     */
    public function close(): void {}
}
}
