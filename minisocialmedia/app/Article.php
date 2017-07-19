<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

protected $fillable=[
'username','user_id','content','heading'];

protected $dates=['deleted_at'];

public function user(){
    return $this->belongsTo(User::class);
}

public function getShortContentAttribute(){
    return substr($this->content,0,random_int(60,150)).'...';
}

}
