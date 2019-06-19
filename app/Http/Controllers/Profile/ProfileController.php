<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Model\Profile\Profile;
use App\Repositories\ProfileRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProfileRepository $profileRepository)
    {
        $profile = $profileRepository->getProfile();
        if ($profile) {
            return view('profile/index', compact('profile'));
        } else {
            abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProfileRepository $profileRepository)
    {
        $profile = $profileRepository->getProfile();
        return view('profile/index', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request, ProfileRepository $profileRepository)
    {
        $data = $request->all();
        if($request->has('email_newsletter')) {
            $data['email_newsletter'] = 1;
        } else {
            $data['email_newsletter'] = 0;
        }
        if ( $request->hasfile('image_main') ) {
            $image = $request->file('image_main');
            $image_name = time().'-'.$image->getClientOriginalName();
            $image->storeAs('public/images/profile', $image_name);
            $data['image_main'] = $image_name;
        }

        if ( $request->hasfile('organization_logo') ) {
            $logo = $request->file('organization_logo');
            $logo_name  = now().'-'.$logo->getClientOriginalName();
            $logo->storeAs('public/images/organizations', $logo_name);
            $data['organization_logo']  = $logo_name;
        }


        $profile = $profileRepository->update($data);
        if ($profile) {
            session()->flash('success','Profile Updated Successfully');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function removeImage($id)
    {
        $profile = Profile::find($id);
        Storage::delete( 'public/images/profile/' . $profile->image_main);
        $profile->image_main = '';
        $profile->save();
        return 'success';
    }
    
    public function removeLogo($id)
    {
        $profile = Profile::find($id);
        Storage::delete('/public/images/organizations/'.$profile->organization_logo );
        $profile->organization_logo = '';
        $profile->save();
        return 'success';
    }
}
