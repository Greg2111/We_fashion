<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;



    /**
     * Article categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasmany
     */
    public function product() {
        return $this->hasmany(Product::class, 'id_cat', 'id');
    }
    

}
