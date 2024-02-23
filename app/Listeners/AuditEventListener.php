<?php

namespace App\Listeners;

use App\Events\AuditEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AuditEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AuditEvent $event): void
    {
        DB::table('audits')->insert([
            'type' => $event->type,
            'user_id' => $event->user->id,
            'user_name' => $event->user->name,
            'user_ip' => $event->ip,
            'data' => json_encode($event->data),
            'created_at' => now(),
            // 'updated_at' => now(),
        ]);
    }
}
