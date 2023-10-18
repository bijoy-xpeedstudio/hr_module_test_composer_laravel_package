<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use \SyntheticRevisions\Trait\RevisionableTrait;
use MongoDB\Laravel\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Document extends Model implements HasMedia
{
    use HasFactory, RevisionableTrait, InteractsWithMedia;

    protected $fillable = [
        'name', 'description', 'user_id'
    ];
}
