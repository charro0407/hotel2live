<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

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
        Mail::raw("Hello World", function ($mail) {
                $mail->from(env('MAIL_FROM'));
                $mail->to(env('MAIL_ADMIN_NOTIFICATION'))
                    ->subject('Report of recent searches in hotel2live');
            });
        $this->info('Searches sent');
    }
}
