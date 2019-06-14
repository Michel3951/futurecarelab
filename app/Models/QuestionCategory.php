<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    protected $table ='question_categories';

    protected $fillable = ['question_id', 'category_id'];
}
