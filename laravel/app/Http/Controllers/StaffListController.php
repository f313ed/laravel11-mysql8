<?php

namespace App\Http\Controllers;

use App\Application\StaffList\GetStaffListUseCase;
use Illuminate\Http\JsonResponse;

class StaffListController extends Controller
{
    private $getStaffListUseCase;

    public function __construct(GetStaffListUseCase $getStaffListUseCase)
    {
        $this->getStaffListUseCase = $getStaffListUseCase;
    }

    public function index(): JsonResponse
    {
        $staffList = $this->getStaffListUseCase->execute();
        return response()->json($staffList);
    }
}
