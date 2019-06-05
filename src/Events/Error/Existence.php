<?php
declare(strict_types = 1);

namespace parallel\Events\Error;

if (!\class_exists('\\parallel\\Events\\Error\\Existence')) {
class Existence extends \Exception
{
}
}
