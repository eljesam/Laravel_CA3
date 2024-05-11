<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class DinoProfile extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['name', 'slug', 'species','description', 'image_path'];
    protected $fillable = ['name', 'slug', 'species', 'era', 'diet', 'habitat', 'size', 'description', 'image_path'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}