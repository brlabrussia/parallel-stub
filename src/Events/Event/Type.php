<?php
declare(strict_types = 1);

namespace parallel\Events\Event;

if (!\class_exists('\\parallel\\Events\\Event\\Type')) {
final class Type {
    /* Event::$object was read into Event::$value */
    const Read = 1;

    /* Input for Event::$source written to Event::$object */
    const Write = 2;

    /* Event::$object (Channel) was closed */
    const Close = 3;

    /* Event::$object (Future) was cancelled */
    const Cancel = 5;

    /* Runtime executing Event::$object (Future) was killed */
    const Kill = 6;

    /* Event::$object (Future) raised error */
    const Error = 4;
}
}