<?php
declare(strict_types = 1);

namespace parallel\Runtime\Error;

if (!\class_exists('\\parallel\\Runtime\\Error\\IllegalReturn')) {
class IllegalReturn extends \Exception
{
}
}
