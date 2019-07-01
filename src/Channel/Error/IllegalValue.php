<?php
declare(strict_types = 1);

namespace parallel\Channel\Error;

use parallel\Channel\Error;

if (!\class_exists('\\parallel\\Channel\\Error\\IllegalValue')) {
class IllegalValue extends Error
{
}
}
