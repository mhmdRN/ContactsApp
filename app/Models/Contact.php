<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['firstName','lastName','email','phone','address','user_id'];

    public function scopeFilter($query,array $filters)
    {
        if($filters['search'] ?? false){
            $query->where('firstName','LIKE','%'.request('search').'%')
                ->orWhere('lastName','LIKE','%'.request('search').'%')->get();
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
