<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Homedata extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'device', 'reimburse_Pension', 'bonus_remainder'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     
   /*protected $casts = [
        'device' => 'array',
        'reimburse_Pension' => 'array',
        'bonus_remainder' => 'array',
    ];
*/

      public function user(){
        return $this->belongsTo(User::class);
    }


    protected $hidden = [
        
    ];
}
