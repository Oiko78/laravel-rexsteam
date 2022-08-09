<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model {
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games';

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? null) {
            $query
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('short_description', 'like', '%' . request('search') . '%')
                ->orWhere('long_description', 'like', '%' . request('search') . '%')
                ->orWhere('developer', 'like', '%' . request('search') . '%')
                ->orWhere('publisher', 'like', '%' . request('search') . '%');
        }
    }

    public function category() {
        return $this->belongsTo(GameCategory::class);
    }
}
