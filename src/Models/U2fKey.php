<?php namespace Lipetuga\U2f\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OtpKey
 *
 * @author  LAHAXE Arnaud
 * @package Lipetuga\U2f\Models
 */
class U2fKey extends Model
{
    public $table = "u2f_key";

    public $primaryKey = "id";

    public $timestamps = TRUE;

    public $fillable = [
        "user_id",
        "keyHandle",
        "publicKey",
        "certificate",
        "counter"
    ];

    /**
     * @author LAHAXE Arnaud <lahaxe.arnaud@gmail.com>
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        $model = config('auth.providers.users.model');
        return $this->belongsTo($model);
    }
}
