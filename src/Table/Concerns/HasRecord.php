<?php

namespace JAOcero\ViltTable\Table\Concerns;

use Illuminate\Database\Eloquent\Model;

trait HasRecord
{
    protected Model $record;

    public function record(Model $record): static
    {
        $this->record = $record;

        return $this;
    }

    public function getRecord(): Model
    {
        return $this->record;
    }
}
