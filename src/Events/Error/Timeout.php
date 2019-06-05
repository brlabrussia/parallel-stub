<?php
declare(strict_types = 1);

namespace parallel\Events\Error;

if (!\class_exists('\\parallel\\Events\\Error\\Timeout')) {
class Timeout extends \Exception
{
}
}