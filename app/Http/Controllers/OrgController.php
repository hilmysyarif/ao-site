<?php

namespace App\Http\Controllers;

class OrgController extends Controller
{

    /**
     * Display the page of about.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('org.about');
    }

    /**
     * Display the page of about.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('org.contact');
    }

    /**
     * Display the page of policies.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('org.faq');
    }

    /**
     * Display the page of policies.
     *
     * @return \Illuminate\Http\Response
     */
    public function policies()
    {
        return view('org.policies');
    }

    /**
     * Display the page of team.
     *
     * @return \Illuminate\Http\Response
     */
    public function team()
    {
        return view('org.team');
    }

    /**
     * Display the page of terms.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('org.terms');
    }

}
