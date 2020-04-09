<?php

namespace Stackviet\LaravelAdmin;

class Roles
{
    /**
     * Define list of role
     *
     * @var array
     */
    private $roles;

    /**
     * Create a new service provider instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->roles = config('laraveladmin.roles');
    }

    /**
     * Get role list
     */
    public function getRoles()
    {
        return (array) @array_keys($this->roles);
    }
}