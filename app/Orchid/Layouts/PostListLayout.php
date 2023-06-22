<?php

namespace App\Orchid\Layouts;

use App\Models\Post;
use Illuminate\Support\Str;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'ID'),
            TD::make('owner_id', 'Owner')
                ->render(fn(Post $post) => $post->owner->name),
            TD::make('content', 'Content')
                ->render(fn(Post $post) => Str::limit($post->content, 80)),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
