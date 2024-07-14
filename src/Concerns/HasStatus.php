<?php

namespace Mokhosh\FilamentKanban\Concerns;

trait HasStatus
{
    protected static string $recordStatusAttribute = 'status';

    protected static string $statusEnum;
}
