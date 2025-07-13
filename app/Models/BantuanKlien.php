<?php

namespace App\Models;

use App\Enums\TicketStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BantuanKlien extends Model
{
    use HasFactory;
    protected $table = 'bantuan_klien';

    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'status',
    ];

    protected $casts = [
        'status' => TicketStatus::class,
    ];

    /**
     * Relasi ke tabel 'users' (Satu tiket bantuan dimiliki oleh satu User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}