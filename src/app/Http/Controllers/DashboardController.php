<?php

namespace App\Http\Controllers;

use App\Services\CampaignService;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboardView()
    {
        $campaigns = (new CampaignService())->getCampaignList(Auth::id());

        return view('dashboard', compact('campaigns'));
    }
}
