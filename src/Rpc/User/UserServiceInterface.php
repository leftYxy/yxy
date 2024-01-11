<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace YaoxyD\PltCommon\Rpc\User;

interface UserServiceInterface
{
    public const NAME = 'UserServiceInterface';

    public function ping(): bool;
}
