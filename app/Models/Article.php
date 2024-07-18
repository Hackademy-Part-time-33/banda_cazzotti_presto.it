<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable, HasFactory;
   
    protected $fillable =['title', 'description','price','category_id','user_id', 'is_accepted'];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function toSearchableArray() {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category'=>$this->category,
        ];
    }

    public static function toBeRevidesCount() 
    {
        return Article::where('is_accepted', null)->whereNot('user_id', auth()->user()->id)->count();
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    } 
}

