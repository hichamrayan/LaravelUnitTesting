<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MinorCannotBuyAlcoholicBeverageException;

class Beverage extends Model
{
    protected $fillable = [
        'name','type'
    ];

    public function buy(){
        if(auth()->user()->isMinor()){
            throw new MinorCannotBuyAlcoholicBeverageException; 
        }
        return true;
    }
}
