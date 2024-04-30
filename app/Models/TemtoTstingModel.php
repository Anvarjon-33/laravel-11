<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemtoTstingModel extends Model
{
    use HasFactory;
    private $table = 'my_testing_table';
    private $cast = 'casting';

    public function hasOne($related, $foreignKey = null, $localKey = null)
    {
    }

}
