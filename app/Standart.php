<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed quality_docs
 * @property mixed name
 * @property mixed producer
 * @property mixed package
 * @property mixed quantity
 * @property mixed expire_date
 */
class Standart extends Model
{
    protected $table = 'standarts';
    protected $name;


}
