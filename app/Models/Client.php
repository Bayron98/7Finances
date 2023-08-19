<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'ice', 'adresse', 'ville', 'email', 'telephone'];


    public function projects() {
        return $this->hasMany(Project::class);
    }
    public function expenses() {
        return $this->hasMany(Expense::class);
    }
    public function invoices() {
        return $this->hasMany(Invoice::class);
    }
    public function payments() {
        return $this->hasMany(Payment::class);
    }
}
