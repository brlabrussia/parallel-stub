<?php
declare(strict_types = 1);

namespace parallel;

use parallel\Events\Error;
use parallel\Events\Error\Existence;
use parallel\Events\Error\Timeout;
use parallel\Events\Event;

if (!\class_exists('\\parallel\\Events')) {
/**
 * The Event loop monitors the state of sets of futures and or channels (targets) in order to perform read
 *  ({@see Future::value()}, {@see Channel::recv()}) and write ({@see Channel::send()}) operations as the targets
 *  become available and the operations may be performed without blocking the event loop.
 */
final class Events implements \Countable, \Traversable {
    /**
     * Shall set input for this event loop
     *
     * @param Events\Input $input
     */
    public function setInput(Events\Input $input): void {}

    /**
     * Shall watch for events on the given channel
     *
     * @param Channel $channel
     *
     * @throws Existence if channel was already added.
     */
    public function addChannel(Channel $channel): void {}

    /**
     * Shall watch for events on the given future
     *
     * @param string $name
     * @param Future $future
     *
     * @throws Existence if target with the given name was already added.
     */
    public function addFuture(string $name, Future $future): void {}

    /**
     * Shall remove the given target
     *
     * @param string $target
     *
     * @throws Existence if target with the given name was not found.
     */
    public function remove(string $target): void {}

    /**
     * Shall set the timeout in microseconds
     *
     * By default when events are polled for, blocking will occur (at the PHP level) until the first event can be
     *  returned: Setting blocking mode to false will cause poll to return control if the first target polled is not ready.
     *
     * This differs from setting a timeout of 0 with {@see Events::setTimeout()}, since a timeout of 0, while allowed,
     *  will cause an exception to be raised, which may be extremely slow or wasteful if what is really desired is
     *  non-blocking behaviour.
     *
     * A non-blocking loop effects the return value of {@see Events::poll()}, such that it may be null before all events
     *  have been processed.
     *
     * @param bool $blocking
     *
     * @throws Error if loop has timeout set.
     */
    public function setBlocking(bool $blocking): void {}

    /**
     * By default when events are polled for, blocking will occur (at the PHP level) until the first event can be
     *  returned: Setting the timeout causes an exception to be thrown when the timeout is reached.
     *
     * This differs from setting blocking mode to false with {@see Events::setBlocking()}, which will not cause an
     *  exception to be thrown.
     *
     * @param int $timeout
     *
     * @throws Error if loop has timeout set.
     */
    public function setTimeout(int $timeout): void {}

    /**
     * Should there be no targets remaining, null shall be returned
     *
     * Should this be a non-blocking loop, and blocking would occur, null shall be returned
     *
     * Otherwise, the {@see Event} returned describes the event.
     *
     * @return Event|null
     *
     * @throws Timeout if timeout is used and reached.
     */
    public function poll(): ?Event {}

    /**
     * @inheritdoc
     */
    public function count() {}
}
}
