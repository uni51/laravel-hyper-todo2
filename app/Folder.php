<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    /**
     * リレーションを定義
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
