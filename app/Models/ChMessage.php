<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Chatify\Traits\UUID;

class ChMessage extends Model
{
    use UUID;
    public $unreadMessagesCount=0;

    public function UnreadMessagesCount()
    {
        return $this->unreadMessagesCount = ChMessage::where('to_id', Auth::id())
                                              ->where('seen', 0)
                                              ->count();
    }

}
