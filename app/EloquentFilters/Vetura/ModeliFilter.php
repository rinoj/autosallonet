<?php

namespace App\EloquentFilters\Vetura;

use Fouladgar\EloquentBuilder\Support\Foundation\Contracts\Filter;
use Illuminate\Database\Eloquent\Builder;
use App\Modeli;

class ModeliFilter extends Filter
{
    /**
     * Apply the condition to the query.
     *
     * @param Builder $builder
     * @param mixed $value
     *
     * @return Builder
     */
    public function apply(Builder $builder, $value): Builder
    {
        $modeli = Modeli::where('emri', $value)->first();
        //dd($marka);
        return $builder->where('modeli_id', '=', $modeli->id);
    }
}
