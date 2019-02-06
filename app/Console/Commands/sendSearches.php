<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use DB;
use App\Quotation;

class sendSearches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'searches:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send report recent searches';

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
     * @return mixed
     */
    public function handle()
    {
        // Get data from database
        $data = DB::table('searches')->orderBy('created_at', 'asc')->take(10)->get();
        $data = json_decode(json_encode($data), true);

        $location = DB::table('locations')->get()->toArray();
        $location = json_decode(json_encode($location), true);

        Mail::send("layouts.emailSearches", ['data' => $data, 'location' => $location], function ($mail) {
                $mail->from(env('MAIL_FROM'));
                $mail->to(env('MAIL_ADMIN_NOTIFICATION'))
                    ->subject('Report of recent searches in hotel2live');
            });
        $this->info('Searches sent');
    }
}
