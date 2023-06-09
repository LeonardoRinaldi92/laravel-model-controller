<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 * @property int id
 * @property string title
 * @property string original_title
 * @property string nationality
 * @property date date
 * @property float vote
 * 
 */
class Movie extends Model
{
    use HasFactory;
}
