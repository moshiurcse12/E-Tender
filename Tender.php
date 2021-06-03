<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public static function topTenders()
  {
    $topTenders = Tender::where('status', 0)->orderBy('visitor', 'DESC')->paginate(10);
    return $topTenders;
  }

  public static function recentTenders()
  {
    $recentTenders = Tender::where('status', 0)->orderBy('id', 'DESC')->paginate(10);
    return $recentTenders;
  }

  public static function checkForApply($tenderId)
  {
    $tender = TenderRequest::where('tender_id', $tenderId)->where('approved', 1)->first();
    if($tender != null){
      return $tender->approved;
    }
    else{
      return 0;
    }
  }
}
