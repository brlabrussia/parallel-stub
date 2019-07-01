<?php
declare(strict_types = 1);

namespace parallel;

use parallel\Runtime\Error\Bootstrap;

if (!function_exists('\\parallel\\bootstrap')) {
/**
 * Shall use the provided file to bootstrap all runtimes created for automatic scheduling via {@see run()}.
 *
 * @param string $file
 *
 * @throws Bootstrap if previously called for this process.
 * @throws Bootstrap if called after parallel\run().
 */
function bootstrap(string $file): void {}
}

if (!function_exists('\\parallel\\run')) {
/**
 * Shall schedule task for execution in parallel, passing argv at execution time.
 *
 * @see Runtime::run()
 *
 * @param \Closure $task
 * @param array    $argv
 *
 * @return Future|null
 */
function run(\Closure $task, array $argv = []): ?Future {}
}
