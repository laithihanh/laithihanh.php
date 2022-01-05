<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
	protected $primaryKey = 'star_id';
    protected $fillable = ['customer_id','star','product_id','content'];

    public function cus(){
  		return $this->belongsTo( Customer::class,'customer_id');
  }
   public function number_star($id){
        $star = Star::where('product_id', $id)->get();
        if ($star->count() != 0) {
            $qt = 0;
            foreach ($star as $key => $value) {
                $qt += $value->star;
            }
            return $qt / $star->count();
        }else{
            return 0;
        }
    }
}
