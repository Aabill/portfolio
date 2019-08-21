<?php

namespace App\Http\Controllers;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TelegramBotController extends Controller
{
    //]
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function sendMessage(Request $request){


       /*  $request->validate([
            'tele-email' => 'required|email',
            'tele-msg' => 'required'
        ]); */

        $text = "Message from profile Yords.\n" .
                "<strong>Email:</strong>\n" .
                "$request->tele_email\n" .
                "<strong>Message:</strong>\n" .
                $request->tele_msg;

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID',''),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        Session::flash('tele-success','Thank you.');

        return redirect('/');

    }

}
