<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Carbon\Carbon;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends ConfideUser implements UserInterface, RemindableInterface {

	use HasRole;

	/**
	 * Get user by username
	 * @param  string $username Username
	 * @return mixed
	 */
	public function getUserByUserName($username)
	{
		return $this->where('username', '=', $username)->first();
	}

	/**
	 * Get the date the user was created
	 * 
	 * @return [type] [description]
	 */
	public function joined()
	{
		return String::date(Carbon::createFromFormat('Y-m-n H:i:s', $this->created_at));
	}

	/**
	 * Save roles input from multiselect
	 * 
	 * @return [type] [description]
	 */
	public function saveRoles($inputRoles)
	{
		if(!empty($inputRoles)) {
			$this->roles()->sync($inputRoles);
		} else {
			$this->roles()->detach();
		}
	}

	/**
	 * Return user's current role ids only
	 * 
	 * @return array | boolean
	 */
	public function currentRoleIds()
	{
		$roles = $this->roles;
		$roleIds = false;

		if(!empty($roles)) {
			$roleIds = array();

			foreach($roles as &$role) {
				$roleIds[] = $role->id;
			}
		}

		return $roleIds;
	}

	public function checkAuthAndRedirect()
	{

	}

	public function currentUser()
	{

	}

	public function getReminderEmail()
	{

	}
}
