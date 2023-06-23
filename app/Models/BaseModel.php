<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     *
     * @param Builder $query
     * @param int|null $owner_id
     * @return Builder
     */
    public function scopeOwner(Builder $query, ?int $owner_id): Builder
    {
        return $owner_id === null ? $query : $query->where('owner_id', $owner_id);
    }

}
