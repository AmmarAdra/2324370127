<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'service_id',
        'project_name',
        'status',
        'start_date',
        'end_date',
    ];

    /**
     * Relasi ke tabel 'users' (Satu Proyek dimiliki oleh satu User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke tabel 'services' (Satu Proyek merujuk ke satu Service).
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Relasi ke tabel 'invoices' (Satu Proyek bisa memiliki banyak Invoice).
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}