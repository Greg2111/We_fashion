<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'price', 'size', 'image', 'visibility', 'status', 'reference', 'id_cat'
    ];


// fonction qui permet de regler le format des prix des produits
    public function getPrice(){
        $price = $this->price / 100;

        return number_format($price, 2, '. ', ' ') . " €";
    }


/**
     * Article categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo(Category::class, 'id_cat', 'id');
    }

}