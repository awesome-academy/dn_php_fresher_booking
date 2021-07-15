<?php

use App\Models\BookingRequest;
use Illuminate\Database\Seeder;

class BookingRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookingRequests = [
            [
                'user_id' => 1,
                'tour_id' => 2,
                'status' => 0,
                'date' => '2021-10-19',
            ],
            [
                'user_id' => 2,
                'note' => 'abcd',
                'tour_id' => 1,
                'status' => 0,
                'date' => '2021-10-19',
            ],
            [
                'user_id' => 2,
                'note' => 'abcd',
                'tour_id' => 1,
                'status' => 0,
                'date' => '2021-10-19',
            ],
            [
                'user_id' => 2,
                'note' => 'abcd',
                'tour_id' => 1,
                'status' => 0,
                'date' => '2021-10-19',
            ],
            [
                'user_id' => 2,
                'note' => 'abcd',
                'tour_id' => 1,
                'status' => 0,
                'date' => '2021-10-19',
            ],
        ];

        foreach ($bookingRequests as $bookingRequest) {
            BookingRequest::create([
                'user_id' => $bookingRequest['user_id'],
                'tour_id' => $bookingRequest['tour_id'],
                'date' => $bookingRequest['date'],
                'status' => $bookingRequest['status'],
            ]);
        }
    }
}
