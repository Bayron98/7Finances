<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie', 'montant', 'date', 'note', 'payed', 'vendor_id', 'client_id', 'project_id'
    ];
    
    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function project() {
        return $this->belongsTo(Project::class);
    }
    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
