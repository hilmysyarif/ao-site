<?php

namespace App\Http\Controllers;

use Ao\Http\Api;
use Ao\Http\Paginate;
use Illuminate\Http\Request;

class BenefitsController extends Controller
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
        $response = $this->api->get('/site/benefits', $request->all(), ['id', 'name', 'image']);
        $benefits = new Paginate($response);

        $response = $this->api->get('/site/benefit-types');
        $types = json_decode($response->getBody());

        $query = collect($request->all())->forget('page');

        return view('benefits.index', compact('benefits', 'types', 'query'));
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
