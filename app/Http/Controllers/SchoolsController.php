<?php

namespace App\Http\Controllers;

use Ao\Http\Api;
use Ao\Http\Paginate;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * @var Api;
     */
    protected $api;

    /**
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = $this->api->get('/site/schools', $request->all(), ['id', 'name', 'image']);
        $schools = new Paginate($response);

        $response = $this->api->get('/site/school-categories');
        $categories = json_decode($response->getBody());

        $query = collect($request->all())->forget('page');

        return view('schools.index', compact('schools', 'categories', 'query'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
