<?php 

namespace App\Permissions;

use App\Models\Role;
use App\Models\Permission;

trait HasPermissionsTrait
{
	public function roles()
	{
		return $this->belongsToMany(Role::class,'users_roles');
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class,'users_roles');
	}

	public function permissions()
	{
		return $this->belongsToMany(Role::class,'users_permissions');
	}

}