<?php

namespace App\Domain\Staff\Entities;

use App\Domain\Staff\Entities\StaffEntity;
use App\Domain\Staff\Repositories\StaffRepositoryInterface;
use Illuminate\Support\Collection;

class StaffListEntity
{
    private $staffRepository;

    public function __construct(StaffRepositoryInterface $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    public function getStaffList(): Collection
    {
        $staffData = $this->staffRepository->getStaffList();

        return $staffData->map(function ($staff) {
            return new StaffEntity(
                id: $staff->getId(),
                name: $staff->getName()
            );
        });
    }
}
