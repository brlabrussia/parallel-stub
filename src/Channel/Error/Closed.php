<?php
declare(strict_types = 1);

namespace parallel\Channel\Error;

if (!\class_exists('\\parallel\\Channel\\Error\\Closed')) {
class Closed extends \Exception
{
}
}