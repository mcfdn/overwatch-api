<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model\ListableInterface;
use App\Contracts\Model\ShowableInterface;

class Platform extends Model implements ListableInterface, ShowableInterface
{
    public $timestamps = false;

    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return $this->attributes['url'] = route(
            'api.show',
            ['resource' => 'platform', 'id' => $this->attributes['id']]
        );
    }

    public function scopeList($query)
    {
        return $query;
    }

    public function scopeShow($query)
    {
        return $query;
    }
}