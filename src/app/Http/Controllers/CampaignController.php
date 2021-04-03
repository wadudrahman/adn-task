<?php

namespace App\Http\Controllers;

use App\Services\CampaignService;
use Carbon\Carbon;
use Carbon\Exceptions\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    public function showCreateCampaignView()
    {
        return view('createCampaign');
    }

    public function createCampaign(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'start_form' => 'required|string',
                'end_at' => 'required|string',
                'daily_budget' => 'required|string',
                'total_budget' => 'required|string'
            ]
        );

        $data = [
            'title' => trim($request->title),
            'start_from' => Carbon::parse(trim($request->start_form))->format('d/m/Y'),
            'end_at' => Carbon::parse(trim($request->end_at))->format('d/m/Y'),
            'daily_budget' => trim($request->daily_budget),
            'total_budget' => trim($request->total_budget),
            'created_by' => Auth::id()
        ];

        $campaignServiceObj = new CampaignService();
        $isStored = $campaignServiceObj->addCampaign($data);

        if ($isStored) {
            $mediaPool = $request->media;
            if ($campaignServiceObj->storeImage($mediaPool, $isStored->id)){
                session()->flash('success_message', __('Campaign Created Successfully'));
                $redirectTo = 'dashboard';
            } else {
                session()->flash('danger_message', __('Campaign Creation Failed, Please Try Again.'));
                $redirectTo = 'campaign.create.get';
            }
        } else {
            session()->flash('warning_message', __('Campaign Creation Failed, Please Try Again.'));
            $redirectTo = 'campaign.create.get';
        }

        return redirect()->to($redirectTo);
    }

    public function deleteCampaign($campaignId)
    {
        if ((new CampaignService())->deleteCampaign($campaignId)) {
            session()->flash('success_message', __('Campaign Deleted Successfully'));
        } else {
            session()->flash('warning_message', __('Campaign Deletion Failed, Please Try Again.'));
        }

        return redirect()->to('dashboard');
    }

    public function showEditCampaign($campaignId)
    {
        $campaignDetails = (new CampaignService())->getCampaignDetails($campaignId);

        return view('editCampaign', compact('campaignDetails'));
    }

    public function editCampaign(Request $request, $campaignId)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'start_form' => 'required|string',
                'end_at' => 'required|string',
                'daily_budget' => 'required|string',
                'total_budget' => 'required|string'
            ]
        );

        $data = [
            'title' => trim($request->title),
            'start_from' => Carbon::parse(trim($request->start_form))->format('d/m/Y'),
            'end_at' => Carbon::parse(trim($request->end_at))->format('d/m/Y'),
            'daily_budget' => trim($request->daily_budget),
            'total_budget' => trim($request->total_budget),
            'updated_by' => Auth::id()
        ];

        $campaignServiceObj = new CampaignService();
        $isStored = $campaignServiceObj->addCampaign($data);

        if ($isStored) {
            $mediaPool = $request->media;
            if ($campaignServiceObj->storeImage($mediaPool, $isStored->id)){
                session()->flash('success_message', __('Campaign Updated Successfully'));
            } else {
                session()->flash('danger_message', __('Campaign Update Failed, Please Try Again.'));
            }
        } else {
            session()->flash('warning_message', __('Campaign Update Failed, Please Try Again.'));
        }

        return redirect()->to('dashboard');
    }

    private function campaignData($campaign)
    {
        $campaignDetails['title'] = $campaign->title;
        $campaignDetails['start_date'] = $campaign->start_from;
        $campaignDetails['end_date'] = $campaign->end_at;
        $campaignDetails['daily_budget'] = $campaign->daily_budget;
        $campaignDetails['total_budget'] = $campaign->total_budget;
        $campaignDetails['title'] = $campaign->title;
        foreach ($campaign->media as $media) {
            $campaignDetails['media'][] = $media->path;
        }

        return $campaignDetails;
    }

    public function campaignList()
    {
        $data = $campaignData = [];
        $campaigns = (new CampaignService())->getCampaignList();
        foreach ($campaigns as $campaign) {
            $campaignData[] = self::campaignData($campaign);
        }

        if (!empty($campaignData)) {
            $data['message'] = "Success";
            $data['is_data'] = true;
            $data['data'] = $campaignData;
        } else {
            $data['message'] = "No Campaign Found";
            $data['is_data'] = false;
        }

        return response()->json($data);
    }

    public function createCampaignFromApi(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'start_form' => 'required|string',
                'end_at' => 'required|string',
                'daily_budget' => 'required|string',
                'total_budget' => 'required|string'
            ]
        );

        $data = [
            'title' => trim($request->title),
            'start_from' => Carbon::parse(trim($request->start_form))->format('d/m/Y'),
            'end_at' => Carbon::parse(trim($request->end_at))->format('d/m/Y'),
            'daily_budget' => trim($request->daily_budget),
            'total_budget' => trim($request->total_budget)
        ];

        $campaignServiceObj = new CampaignService();
        $isStored = $campaignServiceObj->addCampaign($data);
        unset($data);

        if ($isStored) {
            $mediaPool = $request->media;
            if ($campaignServiceObj->storeImage($mediaPool, $isStored->id)){
                $data['message'] = "Success";
                $data['is_data'] = true;
                $data['data'] = self::campaignData($isStored);
            } else {
                $data['message'] = "Failed";
                $data['is_data'] = false;
            }
        } else {
            $data['message'] = "Failed";
            $data['is_data'] = false;
        }

        return response()->json($data);
    }
}
