<?php
declare(strict_types = 1);

namespace parallel\Runtime\Error;

use parallel\Runtime\Error;

if (!\class_exists('\\parallel\\Runtime\\Error\\IllegalReturn')) {
class IllegalReturn extends Error
{
}
}
