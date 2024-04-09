<?php

namespace App\Domain\Staff\Repositories;

use Illuminate\Support\Collection;

interface StaffRepositoryInterface
{
    public function getStaffList(): Collection;
}
