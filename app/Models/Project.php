<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'date_echeance', 'note', 'client_id'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function invoices() {
        return $this->hasMany(Invoice::class);
    }
    public function expenses() {
        return $this->hasMany(Expense::class);
    }

}
