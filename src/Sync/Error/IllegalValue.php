<?php
declare(strict_types = 1);

namespace parallel\Sync\Error;

use parallel\Sync\Error;

if (!\class_exists('\\parallel\\Sync\\Error\\IllegalValue')) {
class IllegalValue extends Error
{
}
}
