<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserController extends Controller
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getById($id): User
    {
        return $this->repository->getById($id);
    }

    public function getByEmail($email): User
    {
        return $this->repository->getByEmail($email);
    }
}
