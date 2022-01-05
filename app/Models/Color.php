<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
   protected $primaryKey = 'color_id';
    protected $fillable = ['nameColor','name'];
    public function add(){
    	$color=Color::create([
            'nameColor'=>request()->nameColor,
            'name'=>request()->name
        ]);
    }
    public function edit($id){
    	$col= Color::find($id);
        $col->update([
            'nameColor'=>request()->nameColor,
            'name'=>request()->name,
        ]);
    }
}
