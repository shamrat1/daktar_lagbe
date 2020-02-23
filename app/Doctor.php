<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        "name",
        "b_name",
        "qualifications",
        "b_qualifications",
        "designation",
        "b_designation",
        "expertise",
        "b_expertise",
        "chamber",
        "b_chamber",
        "other_chamber",
        "b_other_chamber",
        "address",
        "b_address",
        "phone",
        "fee",
        "visiting_hours_start",
        "visiting_hours_end",
        "lat",
        "long",
        "weekdays",
        "image"
    ];
}
