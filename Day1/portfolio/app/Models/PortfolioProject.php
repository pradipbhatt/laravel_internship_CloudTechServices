<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    // If the table name does not follow Laravel's naming convention (plural, snake_case),
    // you can explicitly define the table name like this:
    protected $table = 'portfolio_projects'; // optional if the table follows naming conventions.

    // If you have fields that should be mass assignable, specify them here
    protected $fillable = [
        'name',
        'description',
        'technologies',
        'link',
    ];

    // If you want to disable timestamps (created_at and updated_at columns), use the following:
    // public $timestamps = false;
}
