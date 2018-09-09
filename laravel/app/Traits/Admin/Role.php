<?php

namespace App\Traits\Admin;

trait Role
{
    public function roles()
    {
        return $this->belongsToMany(\App\Role::class);
    }   
    
    public function hasAnyRole($roles)
    {
        if (is_array($roles))
        {
            foreach ($roles as $role)
            {
                if ($this->hasRole($role))
                {
                    return true;
                }
            }
        }
        else if ($this->hasRole($roles))
        {
            return true;
        }

        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->whereSlug($role)->first())
        {
            return true;
        }

        return false;
    }
}
