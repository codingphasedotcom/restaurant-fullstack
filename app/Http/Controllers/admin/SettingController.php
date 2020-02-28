<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialSetting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function general(){
        $id = 1;
        $general_setting = GeneralSetting::find($id);
        
        return view('admin/settings/general', [
            'general_setting' => $general_setting
        ]);
    }
    public function saveGeneral(){
        $id = 1;
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);
       
        $general_setting = GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->address_1 = request('address_1');
        $general_setting->address_2 = request('address_2');
        $general_setting->city = request('city');
        $general_setting->state = request('state');
        $general_setting->zipcode = request('zipcode');
        $general_setting->phone_number = request('phone_number');
        $general_setting->save();

        return redirect('/admin/settings/general');

    }
    public function seo(){
        $id = 1;
        $seo_setting = SeoSetting::find($id);
        
        return view('admin/settings/seo', [
            'seo_setting' => $seo_setting
        ]);
    }
    public function saveSeo(){
        $id = 1;
        request()->validate([
            'description' => ['required', 'string'],
            'keywords' => ['required', 'string']
        ]);
       
        $seo_setting = SeoSetting::find($id);
        $seo_setting->description = request('description');
        $seo_setting->keywords = request('keywords');
        $seo_setting->save();

        return redirect('/admin/settings/seo');

    }
    public function social(){
        $id = 1;
        $social_setting = SocialSetting::find($id);

        
        return view('admin/settings/social', [
            'social_setting' => $social_setting
        ]);
    }
    public function saveSocial(){
        $id = 1;
        request()->validate([
            'facebook_url' => ['string'],
            'twitter_url' => ['string'],
            'instagram_url' => ['string'],
        ]);
       
        $social_setting = SocialSetting::find($id);
        $social_setting->facebook_url = request('facebook_url');
        $social_setting->twitter_url = request('twitter_url');
        $social_setting->instagram_url = request('instagram_url');
        $social_setting->save();

        return redirect('/admin/settings/social');

    }
}
