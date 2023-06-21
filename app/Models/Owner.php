<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

/**
 * @method static firstOrCreate(string[] $array)
 */
class Owner extends Model
{
    use HasFactory, AsSource;
}