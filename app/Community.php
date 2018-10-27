<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $table = "communities";
    protected $fillable = [ 'group_name', 'description', 'ref', 'community_author'];
}
