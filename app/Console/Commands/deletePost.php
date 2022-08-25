<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\user\post;


class deletePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deletePost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete 30 days old post';

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
     * @return array
     */
    public function handle()
    {
        post::whereDate('created_at','<=',now()->subDays(30))->delete();
        print_r(post::all()->toArray());
        $this->comment('Product has been deleted');
    }
}
