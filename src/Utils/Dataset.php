<?php

namespace ML\Utils;

use ML\Contracts\Storage;

final class Dataset implements Storage
{
    public function __construct(private array $dataset) {}

    public function all(): array
    {
        return $this->dataset;
    }

    public function count(): int
    {
        return count($this->dataset);
    }

    public function getFeatures(): array
    {
        $features = [];

        foreach ($this->dataset as $row) {
            array_pop($row);

            $features[] = $row;
        }

        return $features;
    }

    public function getLabels(): array
    {
        $labels = [];

        foreach ($this->dataset as $row) {
            $label = array_pop($row);

            $labels[] = $label;
        }

        return $labels;
    }
}
