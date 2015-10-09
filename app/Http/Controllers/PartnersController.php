<?php

namespace App\Http\Controllers;

use Ao\Http\Api;
use Ao\Http\Paginate;
use Illuminate\Http\Request;

class PartnersController extends Controller
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
        $response = $this->api->get('/site/partners', $request->all(), ['id', 'name', 'image']);
        $partners = new Paginate($response);

        $response = $this->api->get('/site/partner-categories');
        $categories = json_decode($response->getBody());

        $query = collect($request->all())->forget('page');

        return view('partners.index', compact('partners', 'categories', 'query'));
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
        return $this->api->get('admin/partners/' . $id)->getBody();
    }

}
