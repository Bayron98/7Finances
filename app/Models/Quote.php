<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_devis', 'num_bc', 'date_devis', 'date_validite', 'remise',
        'note_publique', 'note_personnelle', 'conditions', 'pied_page', 'tva',
        'client_id', 'project_id'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function project() {
        return $this->belongsTo(Project::class);
    }
    public function quote_services() {
        return $this->hasMany(QuoteService::class);
    }
}
