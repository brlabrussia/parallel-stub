<?php
declare(strict_types = 1);

namespace parallel\Future\Error;

use parallel\Future\Error;

if (!\class_exists('\\parallel\\Future\\Error\\Cancelled')) {
class Cancelled extends Error
{
}
}
