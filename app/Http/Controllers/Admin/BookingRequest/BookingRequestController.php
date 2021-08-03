<?php

namespace App\Http\Controllers\Admin\BookingRequest;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use App\Repositories\BookingRequest\BookingRequestRepository;
use Illuminate\Http\Request;

class BookingRequestController extends Controller
{

    private $bookingRepository;

    public function __construct(BookingRequestRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('admin.bookings.index', [
            'bookings' => $this->bookingRepository->orderBy('created_at', 'DESC')->paginate(),
            'active'    => 'bookings_all',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        return $this->bookingRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->bookingRepository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, $id)
    {
        return $this->bookingRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->bookingRepository->delete($id);
    }
}
