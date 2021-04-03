<?php


namespace App\Services;

use App\Models\Campaign;
use App\Models\CreativeUpload;

class CampaignService
{
    public function addCampaign(array $data)
    {
        try {
            return Campaign::create($data);
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function storeImage(array $mediaPool, int $advertiseId)
    {
        foreach ($mediaPool as $media) {
            $originalFileName = $media->getClientOriginalName();
            $originalFileNameArr = explode('.', $originalFileName);
            $fileExt = end($originalFileNameArr);
            $imgName = $advertiseId . "_media_" . time() . '.' . $fileExt;
            $media->move(public_path('images'), $imgName);
            CreativeUpload::create(
                [
                    'path' => $imgName,
                    'advertise_id' => $advertiseId
                ]
            );
        }

        return true;
    }

    public function getCampaignList(int $userId = null)
    {
        return (!is_null($userId)) ? Campaign::where('created_by', $userId)->with('media')->get() :
            Campaign::with('media')->get();
    }

    public function deleteCampaign(int $advertiseId)
    {
        CreativeUpload::where('advertise_id', $advertiseId)->delete();
        return Campaign::find($advertiseId)->delete();
    }

    public function getCampaignDetails(int $advertiseId)
    {
        return Campaign::find($advertiseId)->with('media')->get();
    }

    public function updateCampaign(array $data, int $advertiseId)
    {
        CreativeUpload::where('advertise_id', $advertiseId)->delete();
        return Campaign::find($advertiseId)->update($data);
    }

}
