<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteService extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'quantite', 'prix_unitaire', 'prix_ht', 'quote_id'
    ];

    public function quote() {
        return $this->belongsTo(Quote::class);
    }
}
