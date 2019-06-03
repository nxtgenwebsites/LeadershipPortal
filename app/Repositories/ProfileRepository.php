<?php

namespace App\Repositories;

use App\Model\Profile\Profile;


class ProfileRepository
{
	public function update($profileData)
	{
		$profile = Profile::where('email_id', auth()->user()->email)->first();
		$profile->first_name = $profileData['first_name'];
		$profile->last_name = $profileData['last_name'];
		$profile->email_id2 = $profileData['secondary_email'];
		$profile->city = $profileData['city'];
		$profile->country = $profileData['country'];
		$profile->zip = $profileData['zip'];
		$profile->state = $profileData['state'];
		$profile->phone1 = $profileData['phone_1'];
		$profile->phone2 = $profileData['phone_2'];
		$profile->email_newsletter = $profileData['email_newsletter'];
		$profile->organization_name = $profileData['organization_name'];
		if (isset($profileData['organization_logo'])){
		    $profile->organization_logo = $profileData['organization_logo'];
		}
		if (isset($profileData['image_main'])) {
		    $profile->image_main = $profileData['image_main'];
		}
		$profile->save();
		return $profile;
	}

	public function getProfile()
	{
		return $profile = Profile::where('email_id', auth()->user()->email)->first();
	}
}
