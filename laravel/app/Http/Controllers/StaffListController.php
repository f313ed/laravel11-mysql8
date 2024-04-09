<?php

namespace App\Http\Controllers;

use App\Application\StaffList\GetStaffListUseCase;
use Illuminate\Http\JsonResponse;

/**
 * スタッフ一覧APIのコントローラークラス
 *
 * GetStaffListUseCaseを呼び出してスタッフ一覧を取得し、レスポンスを返す
 * プレゼンテーション層の責務であるリクエストの受付とレスポンスの返却を行う
 */
class StaffListController extends Controller
{
    /**
     * @var GetStaffListUseCase
     */
    private $getStaffListUseCase;

    /**
     * コンストラクタ
     *
     * @param GetStaffListUseCase $getStaffListUseCase
     */
    public function __construct(GetStaffListUseCase $getStaffListUseCase)
    {
        $this->getStaffListUseCase = $getStaffListUseCase;
    }

    /**
     * スタッフ一覧を取得する
     *
     * @return JsonResponse スタッフ一覧のJSONレスポンス
     */
    public function index(): JsonResponse
    {
        $staffList = $this->getStaffListUseCase->execute();
        return response()->json($staffList);
    }
}
