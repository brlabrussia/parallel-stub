<?php
declare(strict_types = 1);

namespace parallel\Events\Input\Error;

use parallel\Events\Input\Error;

if (!\class_exists('\\parallel\\Events\\Input\\Error\\Existence')) {
class Existence extends Error
{
}
}