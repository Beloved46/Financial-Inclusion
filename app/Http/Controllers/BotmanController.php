<?php

namespace App\Http\Controllers;

use PSpell\Config;
use BotMan\BotMan\BotMan;
use App\Models\BillPayment;
use Illuminate\Http\Request;
use BotMan\BotMan\BotManFactory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotmanController extends Controller
{
    
    /**
     * Place your BotMan logic here.
     */
    public function run()
    {
        
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        $botman = BotManFactory::create(config('botman.web'));
     
        $botman->hears('{message}', function($botman, $message) {
           
            if ($message == 'hi') {
               
                $this->askName($botman);
            }
            
            else{
               
                $botman->reply("Start a conversation by saying hi.");
            }
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
    }


    public function handle()
    {
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        $botman = BotManFactory::create(config('botman.web'));

        $botman->hears('{message}', function ($botman, $message) {
            $userMessage = $message;

            $user = Auth::user();

            if (stripos($userMessage, 'latest expense') !== false) {
                // You can replace this with logic to fetch the user's latest bill.
                $bill = BillPayment::where('user_id', Auth::user()->id)->where('is_paid', false)->latest()->first();

                $latestBill = 'Your latest incoming expense is ' . $bill->name . ' with an amount of ' . $bill->amount;

                $botman->reply($latestBill);
            } elseif ($message == 'hi' || $message == 'Hi' || $message == 'hello' || $message == 'Hello') {

                $botman->reply('Welcome to your personal AI assistant ' . $user->name . '. How can I assist you today?');

            }elseif (stripos($userMessage, 'account balance') !== false) {
                // You can replace this with logic to fetch the user's account balance.
                $user = Auth::user();
                $balance = 'Your current account balance is ' . $user->account_balance;

                $botman->reply($balance);
            }elseif (stripos($userMessage, 'wallet balance') !== false) {
                // You can replace this with logic to fetch the user's account balance.
                $user = Auth::user();
                $balance = 'Your current wallet balance is ' . $user->wallet->amount;

                $botman->reply($balance);
            } else {
                $botman->reply('I apologize I\'m still being trained and couldn\'t understand your request. Please ask another question.');
            }
        });

        $botman->listen();
    }



    // public function handle()
    // {
    //     DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

    //     $botman = BotManFactory::create(config('botman.web'));

    //     $user = Auth::user();

    //     $$botman->ask('Welcome to your personal AI assistant '. $user->name .'How can I assist you today?');

    //     $this->hears('{message}', function ($botman, $message) {
    //         $userMessage = $message;

    //         if (stripos($userMessage, 'latest expense') !== false) {
    //             // You can replace this with logic to fetch the user's latest bill.
    //             $bill = BillPayment::where('user_id', Auth::user()->id)->where('is_paid', false)->latest()->first();
                
    //             $latestBill = 'Your latest incoming expense is '. $bill->name . ' with amount of '. $bill->amount;

    //             $botman->say($latestBill);

    //         } elseif (stripos($userMessage, 'balance') !== false) {
    //             // You can replace this with logic to fetch the user's account balance.
    //             $user = Auth::user();
    //             $balance = 'Your current account balance is '. $user->account_balance;

    //             $botman->say($balance);
    //         } else {
    //             $botman->say('I apologize I\'m still being trained and couldn\'t understand your request. Please ask another question.');
    //         }
    //     });
    // }
}
