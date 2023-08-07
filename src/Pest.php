<?php

declare(strict_types=1);

namespace Pest;

function version(): string
{
    return '2.12.1';
}

function testDirectory(string $file = ''): string
{
    return TestSuite::getInstance()->testPath.'/'.$file;
}
