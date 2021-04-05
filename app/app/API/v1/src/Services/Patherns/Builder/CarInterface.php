<?php

namespace API\Services\Patherns\Builder;

interface CarInterface
{
    public function getSpeed(): int;

    public function getSeatsCount(): int;

    public function getLoadPowerInTons(): float;
}
