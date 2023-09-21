<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 * @method static find($id)
 * @property mixed $name
 * @property false|mixed $completed
 */
class ListItem extends Model
{
    use HasFactory;
}
