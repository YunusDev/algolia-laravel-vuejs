<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Laravel\Scout\Searchable;

class Article extends Model
{
    protected $appends = ['format_date'];

    use Searchable;

    public function getFormatDateAttribute(){

        return $this->created_at->diffForHumans();

    }
}
