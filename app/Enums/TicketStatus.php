<?php

namespace App\Enums; // <-- Namespace ini sangat penting

enum TicketStatus: string
{
    case Terbuka = 'Terbuka';
    case Ditutup = 'Ditutup';
    case MenungguBalasan = 'Menunggu Balasan';
}