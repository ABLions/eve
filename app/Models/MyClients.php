<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MyClients
 * @package App\Models
 * @version July 2, 2020, 9:52 pm UTC
 *
 * @property string $name
 * @property integer $phone
 * @property string $mail
 * @property string $comments
 */
class MyClients extends Model
{
    // use SoftDeletes;

    public $table = 'my_clients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'phone',
        'mail',
        'comments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'integer',
        'mail' => 'string',
        'comments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}
