<?php

namespace App\Repositories;

use App\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository implements UserRepositoryInterface
{
    /**
     * @return string
     */
    public function model(): string
    {
        return User::class;
    }

    /**
     * @param  string  $email
     * @return Model
     */
    public function getByEmail(string $email): Model
    {
        return $this->model->where('email', $email)->firstOrFail();
    }
}
