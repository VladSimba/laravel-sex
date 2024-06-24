<?php

namespace App\Http\Controllers;

use App\Models\Partner;


class PartnersController extends Controller
{
    public function index()
    {
        $partners = auth()->user()->partners;

        return view('partners', ['partners' => $partners]);
    }

    public function showAllPartners()
    {
        $partners = Partner::query()->whereHas('user')->get();
        return view('show-all-partners', ['partners' => $partners]);
    }

    public function addPartner(Partner $partner)
    {
        auth()->user()->partners()->attach($partner->id);
        return redirect(route('partners'));
    }
}
