<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\UserRepository as RepositoriesUserRepository;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(
        UserRepository $userRepository
    ){
        $this->userRepository = $userRepository;
    }


    public function paginate(){
        // $users = User::paginate(20);
        $users = $this->userRepository->getAllPaginate();
        return $users;
    }
}
