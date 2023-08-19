<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceService extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'quantite', 'prix_unitaire', 'prix_ht', 'invoice_id'
    ];


    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }
}
