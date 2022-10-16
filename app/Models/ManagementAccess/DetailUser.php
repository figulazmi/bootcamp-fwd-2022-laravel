<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use SoftDeletes;
    
    public $table = 'detail_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function type_user()
    {
        // 3 parameter (path model, field foreign key, field primary key from table hasmany/hasone)
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }

    // one to many
    public function user()
    {
        // 3 parameter (path model, field foreign key, field primary key from table hasmany/hasone)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
