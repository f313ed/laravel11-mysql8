<?php

namespace App\Domain\Staff;

use App\Domain\Staff\Entities\StaffListEntity;
use App\Domain\Staff\Repositories\StaffRepositoryInterface;
use Illuminate\Support\Collection;

class StaffFacade
{
    private $staffRepository;

    public function __construct(StaffRepositoryInterface $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    public function getStaffList(): Collection
    {
        $staffListEntity = new StaffListEntity($this->staffRepository);
        return $staffListEntity->getStaffList();
    }
}