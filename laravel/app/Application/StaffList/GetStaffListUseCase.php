<?php

namespace App\Application\StaffList;

use App\Domain\Staff\StaffFacade;
use Illuminate\Support\Collection;

class GetStaffListUseCase
{
    private $staffFacade;

    public function __construct(StaffFacade $staffFacade)
    {
        $this->staffFacade = $staffFacade;
    }

    public function execute(): Collection
    {
        return $this->staffFacade->getStaffList();
    }
}
