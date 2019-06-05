<?php
declare(strict_types = 1);

namespace parallel\Events;

if (!\class_exists('\\parallel\\Events\\Error')) {
class Error extends \Exception
{
}
}
