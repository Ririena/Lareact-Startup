<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'ratingcount',
        'ratingsum',
    ];

   public function menuTag(): HasMany
   {
    return $this->hasMany(MenuTag::class);
   }

   public function tag(): HasMany
   {
    return $this->hasMany(Tag::class);
   }

   public function comment(): HasMany
   {
    return $this->hasMany(Comment::class);
   }
   public function category(): HasMany
   {
    return $this->hasMany(Category::class);
   }

   public function creator(): BelongsTo
   {
    return $this->belongsTo(User::class, 'created_by');
   }


}
