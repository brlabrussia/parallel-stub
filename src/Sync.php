<?php
declare(strict_types = 1);

namespace parallel;

use parallel\Sync\Error\IllegalValue;

if (!\class_exists('\\parallel\\Sync')) {
/**
 * The parallel\Sync class provides access to low level synchronization primites, mutex, condition variables,
 *  and allows the implementation of semaphores.
 *
 * Synchronization for most applications is much better implemented using channels, however, in some cases authors of
 *  low level code may find it useful to be able to access these lower level mechanisms.
 */
class Sync
{
    /**
     * Shall construct a new synchronization object containing the given scalar value
     *
     * @param int|bool|string|float|double|null $value
     *
     * @throws IllegalValue
     */
    public function __construct ($value = null) {}

    /**
     * Shall atomically return the syncrhonization objects value
     *
     * @return int|bool|string|float|double|null
     */
    public function get() {}

    /**
     * Shall atomically set the value of the synchronization object
     *
     * @param int|bool|string|float|double|null $value
     *
     * @throws IllegalValue
     */
    public function set($value) {}

    /**
     * Shall wait for notification on this synchronization object.
     */
    public function wait() {}

    /**
     * Shall notify one (by default) or all threads waiting on the synchronization object.
     *
     * @param bool $all
     */
    public function notify(bool $all = false) {}

    /**
     * Shall exclusively enter into the critical code
     *
     * @param callable $critical
     */
    public function __invoke(callable $critical) {}
}
}
