<?php

namespace App\Domain\Staff;

use App\Application\StaffList\StaffListService;
use Illuminate\Support\Collection;

/**
 * スタッフに関するビジネスロジックを集約したファサードクラス
 *
 * アプリケーション層からドメイン層へのアクセスポイントとなる
 * StaffListServiceを使ってスタッフ一覧を取得する
 */
class StaffFacade
{
    /**
     * @var StaffListService
     */
    private $staffListService;

    /**
     * コンストラクタ
     *
     * @param StaffListService $staffListService
     */
    public function __construct(StaffListService $staffListService)
    {
        $this->staffListService = $staffListService;
    }

    /**
     * スタッフ一覧を取得する
     *
     * @return Collection スタッフエンティティのコレクション
     */
    public function getAll(): Collection
    {
        return $this->staffListService->getAll();
    }
}