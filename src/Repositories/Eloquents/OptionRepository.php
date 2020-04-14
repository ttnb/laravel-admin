<?php
namespace MySang\LaravelAdmin\Repositories\Eloquents;

use MySang\LaravelAdmin\Repositories\Contracts\RepositoryInterface;
use MySang\LaravelAdmin\Repositories\Contracts\PostRepositoryInterface;

class OptionEloquentRepository extends RepositoryInterface implements PostRepositoryInterface
{
    /**
     * Get model
     * 
     * @return string
     */
    public function getModel()
    {
        return MySang\LaravelAdmin\Models\Option::class;
    }
}
