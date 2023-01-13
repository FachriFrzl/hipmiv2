<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\About;

class Misi extends Model
{
    protected $table = 'misi';
    protected $fillable = [
        'misi','gambar_misi'
    ];
  public function About()
  {
      return $this->belongsTo(About::class);
  }
  protected function gambar_misi(): Attribute
  {
      return Attribute::make(
          get: fn ($value) => asset('/storage/misi/' . $value),
      );
  }
}
