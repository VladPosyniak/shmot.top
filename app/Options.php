<?php

namespace larashop;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    //

    protected $table = 'options';
    protected $fillable = [ 'value', 'price','option_group_id'];

}
