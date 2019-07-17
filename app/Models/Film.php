<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Film extends Model
{
    use Sortable;

    public $sortable = ['id', 'name'];

    protected $sortableAs = ['profit'];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
