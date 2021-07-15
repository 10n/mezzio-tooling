<?php

namespace Mezzio\Tooling\CreateMiddleware;

use function getcwd;
use function realpath;

class CreateMiddlewareCommandFactory
{
    public function __invoke(): CreateMiddlewareCommand
    {
        return new CreateMiddlewareCommand(realpath(getcwd()));
    }
}
