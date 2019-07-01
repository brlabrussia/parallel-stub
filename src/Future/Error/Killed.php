<?php
declare(strict_types = 1);

namespace parallel\Future\Error;

use parallel\Future\Error;

if (!\class_exists('\\parallel\\Future\\Error\\Killed')) {
class Killed extends Error
{
}
}