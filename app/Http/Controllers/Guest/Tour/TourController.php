<?php

namespace App\Http\Controllers\Guest\Tour;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Repositories\Tour\TourRepository as TourTourRepository;
use Illuminate\Http\Request;
use App\Repositories\TourRepository;

class TourController extends Controller
{
    private $tourRepository;

    public function __construct(TourTourRepository $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }

    public function index()
    {
        return View('guest.tour.index', [
            'active' => 'gest_tour',
            'tours' => $this->tourRepository->paginate(),
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->tourRepository->find(($id));
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
    public function update(TourRequest $request, $id)
    {
        return $this->tourRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
