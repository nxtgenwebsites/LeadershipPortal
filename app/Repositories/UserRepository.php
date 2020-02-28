<?php

namespace App\Repositories;

use App\User;


class UserRepository
{
	public function fetchUsers()
	{
		return $users = User::where('user_type','!=','super-admin')->where('token_id','!=',null)->where('id','!=', auth()->user()->id)->get();
	}

	public function getUser($id)
	{
		return $user = User::find($id);
	}

	public function updateUser($id,$data)
	{
		$user = User::find($id);
		$user->first_name = $data->first_name;
		$user->last_name = $data->last_name;
		$user->lock = $data->lock;
		$user->user_type = $data->user_type;
		$user->save();
		return $user;
	}

	public function delete($id)
	{
		$user = User::destroy($id);
		return $user;
	}
}
