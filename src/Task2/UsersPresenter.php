<?php

namespace BinaryStudioAcademy\Task2;

class UsersPresenter
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * The method returns sorted list of users by last name in ascending order
     *
     * @return array
     */
    public function getOrderedByLastName(): array
    {
        $list = $this->repository->getAll();

        usort($list, function($a, $b){
            return ($a['last_name'] <=> $b['last_name']);
        });

        return $list;
    }
}
