<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed quality_docs
 * @property mixed batch
 */
class Reagent extends Model
{
    protected $table = 'reagents';
    protected $name;
    protected $producer;
    protected $package;
    protected $quantity;
    protected $expire_date;
}
