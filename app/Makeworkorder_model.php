<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makeworkorder_model extends Model
{
    protected $fillable=['workid','title','provider','customer','orderdate','deadline','absolutedeadline','additionalinfo','nomaterial','addmaterial','wetransfer','existingmaterial','deliveryby'];
}
