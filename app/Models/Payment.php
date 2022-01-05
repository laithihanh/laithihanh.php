<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['name','content'];
    public function add(){
    	$payment=Payment::create([
            'name'=>request()->name,
            'content'=>request()->content
        ]);
        return $payment;
    }
    public function edit(){

    }
}
