<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // ✅ Izinkan is_visible diisi secara mass assignment
    protected $fillable = ['is_visible'];

    // ✅ Method ini hanya mengubah nilai pada object model ini
    public function toggleVisibility()
    {
        $this->is_visible = !$this->is_visible;
    }
}
