<?php
declare(strict_types = 1);

namespace parallel\Runtime;

if (!\class_exists('\\parallel\\Runtime\\Bootstrap\\Error')) {
class Error extends \Exception
{
}
}
