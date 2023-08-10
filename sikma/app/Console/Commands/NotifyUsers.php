<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Jobs\SendMailJob;
use App\Mail\Notif;
use App\Models\Email;
use App\Models\Kerjasama;
use App\Models\User;
use Carbon\Carbon;

class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $now = date("Y-m-d H:i", strtotime(Carbon::now()));
        logger($now);

        $mail =Email::get();
        if($mail !== null){
            $mail->where('tgl_kirim',  $now)->each(function($mail) {
                if($mail->delivered == 'NO')
                {
                    $users = User::all();
                    $kerjasama = Kerjasama::get();
                    foreach($users as $user) {
                        dispatch(new SendMailJob($user->email, new Notif($mail, $kerjasama)));
                    }
                    $mail->delivered = 'YES';
                    $mail->save();   
                }
            });
        }
    }
}
