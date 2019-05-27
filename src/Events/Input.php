<?php
declare(strict_types = 1);

namespace parallel\Events;

use \parallel\Events\Input\Error\Existence;
use \parallel\Events\Input\Error\IllegalValue;

/**
 * An Input object is a container for data that the {@see Events} object will write to {@see Channel} objects as they
 * become available. Multiple event loops may share an Input container - parallel does not verify the contents of the
 * container when it is set as the input for a {@see Events} object.
 */
final class Input {
    /**
     * Shall set input for the given target.
     *
     * @param string $target
     * @param        $value
     *
     * @throws Existence    if input for target already exists.
     * @throws IllegalValue if value is illegal (object, null).
     */
    public function add(string $target, $value): void {}

    /**
     * Shall remove input for the given target.
     *
     * @param string $target
     *
     * @throws Existence if input for target does not exist.
     */
    public function remove(string $target): void {}

    /**
     * Shall remove input for all targets.
     */
    public function clear() : void {}
}
