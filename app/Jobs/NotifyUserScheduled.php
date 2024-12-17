<?php

namespace App\Jobs;

use App\Mail\UserScheduledMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class NotifyUserScheduled implements ShouldQueue
{
    use Queueable;

    public function __construct(public User $user, public string $scheduledDate)
    {
        //
    }

    public function handle(): void
    {
        Mail::to($this->user->email)->send(
            new UserScheduledMail($this->user, $this->scheduledDate)
        );
    }
}
