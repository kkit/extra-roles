<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

/**
 * @method static paginate()
 * @property mixed $owner
 * @property mixed $content
 */
class Post extends BaseModel
{
    use HasFactory, AsSource;

    protected $table = 'posts';

    /**
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
