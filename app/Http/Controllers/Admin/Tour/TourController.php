<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Repositories\TourRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TourController extends Controller
{

    protected $tourRepository;

    public function __construct(TourRepository $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('admin.tour.index', [
            'active' => 'tour_all',
            'tours' => Tour::paginate(),
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
    public function store(TourRequest $request)
    {
        $attributes = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'money' => $request->money,
            'description' => $request->description,
        ];

        return Tour::create($attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(TourRequest $request)
    {
        if (isset($request->id)) {
            $tour = Tour::find($request->id);
            if (isset($tour)) {
                $attributes = [
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'money' => $request->money,
                    'description' => $request->description,
                    'id' => $request->id,
                ];
                $tour->update($attributes);

                return $tour;
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (isset($request->id)) {
            $tour = Tour::find($request->id);
            if (isset($tour)) {
                return $tour->delete();
            }
        }
    }

    public function getAll()
    {
        return $this->tourRepository->getAllTour();
    }
}
