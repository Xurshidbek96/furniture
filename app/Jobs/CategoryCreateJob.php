<?php

namespace App\Jobs;

use App\Events\AuditEvent;
use App\Models\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CategoryCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $requestData ;
    public $user ;
    public function __construct($requestData, $user)
    {
        $this->requestData = $requestData ;
        $this->user = $user ;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $data = Category::create([
            'name_uz' => $this->requestData['name_uz'],
            'name_en' => $this->requestData['name_en'],
        ]) ;

        event(new AuditEvent($data, $this->user, 'Add', request()->ip())) ;
    }
}
