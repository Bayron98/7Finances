<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant', 'date', 'type', 'ref_transaction', 'note', 'client_id', 'invoice_id'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }
}
