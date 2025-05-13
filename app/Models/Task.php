<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['name', 'status', 'deadline', 'user_id'];

    // Relasi ke model User (Setiap tugas milik satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
