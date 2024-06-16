<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // Nama tabel yang digunakan oleh model ini
    protected $table = 'employees'; // Ubah sesuai dengan nama tabel yang benar

    // Kolom yang boleh diisi melalui mass assignment
    protected $fillable = ['name', 'position', 'email', 'phone'];
}
