<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * @return string
     */
    abstract public function model(): string;

    /**
     * Instantiate a new repository instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = app($this->model());
    }

    /**
     * @param  int  $id
     * @return Model
     */
    public function getById(int $id): Model
    {
        return $this->model->findOrFail($id);
    }
}
