<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendMailToSubscriber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mailchimp:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail to random subscriber';

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
        //
    }
}
