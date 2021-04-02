<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function showCreateCampaignView()
    {
        return view('createCampaign');
    }
}
