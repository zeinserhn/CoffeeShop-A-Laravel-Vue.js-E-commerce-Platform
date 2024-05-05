<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use app\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('total_price', 'total_quantity');
    }

   /* public function price(): Attribute
     {
         return Attribute::make(
             get: fn ($value) => str_replace('.', ',', $value / 100) . '€'
         );
     }
    */
    public function getFormattedPriceAttribute()
    {
        return str_replace(".",",",$this->price/100)." $";

    }


}
