<?php

namespace App\Enums;

enum OrderStatus
{
    case Pending = 'Menunggu Konfirmasi';
    case Verified = 'Permintaan Diterima';
    case Success = 'Barang Telah Tersedia';
    case Done = 'Permintaan Selesai';
}
