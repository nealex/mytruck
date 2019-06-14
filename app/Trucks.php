<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trucks extends Model
{
    protected $fillable = [
        'name', 'rider', 'state', 'type',
        'type_truck_id',
        'rider_id',
        'state_truck_id',
    ];

    public function rider()
    {
        return $this->belongsTo('App\Riders');
    }

    public function state()
    {
        return $this->belongsTo('App\StateTruck', 'state_truck_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\TypeTrucks', 'type_truck_id', 'id');
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'rider' => $this->rider->fio,
            'state' => $this->state->val_state,
            'type' => $this->type->val,
        ];
    }
}
