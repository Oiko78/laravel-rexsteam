<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    use HasFactory;

    public const ADMIN = 1;
    public const MEMBER = 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $fillable = ['name'];

    public function users() {
        return $this->hasMany(User::class);
    }
}
