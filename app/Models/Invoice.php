<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'amount',
        'due_date',
        'status',
    ];

    /**
     * Relasi ke tabel 'projects' (Satu Invoice dimiliki oleh satu Proyek).
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}