<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'num_facture', 'num_bc', 'date_facture', 'date_echeance', 'remise',
        'note_publique', 'note_personnelle', 'conditions', 'pied_page', 'tva',
        'client_id', 'project_id'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function project() {
        return $this->belongsTo(Project::class);
    }
    public function payments() {
        return $this->hasMany(Payment::class);
    }
    public function invoice_services() {
        return $this->hasMany(InvoiceService::class);
    }
}
