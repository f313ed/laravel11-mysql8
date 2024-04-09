<?php

namespace App\Domain\Staff\Repositories;

use App\Models\Staff;
use App\Domain\Staff\Entities\StaffEntity;
use Illuminate\Support\Collection;

class StaffRepository implements StaffRepositoryInterface
{
    public function getStaffList(): Collection
    {
        $staffModels = Staff::all();

        return $staffModels->map(function ($staffModel) {
            return new StaffEntity(
                id: $staffModel->id,
                name: $staffModel->name
            );
        });
    }
}
