<?php

namespace App\Console\Commands;

use App\Notifications\WorkOnDay;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Notification;

class WorkOfTheDay extends Command
{
    protected $bookingRepository;

    protected $userRepository;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'word:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Mail To All Admin About Bookings Request Has Status Inprocess';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        BookingRepository $bookingRepository,
        UserRepository $userRepository
    ) {
        $this->bookingRepository = $bookingRepository;
        $this->userRepository = $userRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [
            'totalBookings' => count($this->bookingRepository->where(Config::get('common.status_booking.process'))->get()),
            'title' => trans('messages.schedule_send_mail_admin.title'),
            'content' => trans('messages.schedule_send_mail_admin.content'),
            'action' => trans('messages.schedule_send_mail_admin.action'),
            'thanks' => trans('messages.schedule_send_mail_admin.thanks'),
        ];

        $admins = $this->userRepository->where('is_admin', true)->get();

        Notification::send($admins, new WorkOnDay($data));
    }
}
