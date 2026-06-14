<?php

namespace ML\Contracts;

interface Storage
{
    public function all(): array;

    public function count(): int;

    public function getFeatures(): array;

    public function getLabels(): array;
}
