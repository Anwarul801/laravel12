<?php
/**
 * @Author: Anwarul
 * @Date: 2025-11-17 15:02:20
 * @LastEditors: Anwarul
 * @LastEditTime: 2025-11-17 15:02:28
 * @Description: Innova IT
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}
