<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

use App\Listener\BootApplicationListener;
use Hyperf\ExceptionHandler\Listener\ErrorExceptionHandler;

return [
    ErrorExceptionHandler::class,
    BootApplicationListener::class
];