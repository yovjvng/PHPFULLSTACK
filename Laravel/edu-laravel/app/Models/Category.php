<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 모델 생성 : php artisan make:model Category -mfs
    // 옵션으로 migration, factory, seeder를 한번에 생성

    use HasFactory;
}
