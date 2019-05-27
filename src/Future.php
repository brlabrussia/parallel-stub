<?php
declare(strict_types = 1);

namespace parallel;

/**
 * A Future represents the return value or uncaught exception from a task, and exposes an API for cancellation.
 */
final class Future {
    /**
     * Shall return (and if necessary wait for) return from task.
     *
     * @return mixed
     *
     * @throws Future\Error           if waiting failed (internal error).
     * @throws Future\Error\Killed    if {@see Runtime} executing task was killed.
     * @throws Future\Error\Cancelled if task was cancelled.
     * @throws Future\Error\Foreign   if task raised an unrecognized uncaught exception.
     *
     * Shall rethrow \Throwable uncaught in task
     */
    public function value() {}

    /**
     * Shall indicate if the task was cancelled.
     *
     * @return bool
     */
    public function cancelled(): bool {}

    /**
     * Shall indicate if the task is completed.
     *
     * @return bool
     */
    public function done(): bool {}

    /**
     * Shall try to cancel the task. Internal function calls in progress cannot be interrupted.
     *
     * @return bool
     *
     * @throws Future\Error\Killed    if {@see Runtime} executing task was killed.
     * @throws Future\Error\Cancelled if task was already cancelled.
     */
    public function cancel(): bool {}
}