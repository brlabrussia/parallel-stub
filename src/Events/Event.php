<?php
declare(strict_types = 1);

namespace parallel\Events;

/**
 * When an Event is returned, {@see Event::$object} shall be removed from the loop that returned it, should the event be
 *  a write event the Input for {@see Event::$source} shall also be removed.
 */
final class Event {
    /** @var int Shall be one of Event\Type constants */
    public $type;

    /** @var string Shall be the source of the event (target name) */
    public $source;

    /** @var object Shall be either Future or Channel */
    public $object;

    /** @var mixed Shall be set for Read/Error events */
    public $value;
}