<?php

namespace App\Domain\Staff;

use App\Domain\Staff\Entities\StaffListEntity;
use App\Domain\Staff\Repositories\StaffRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * スタッフに関するビジネスロジックを集約したファサードクラス
 *
 * アプリケーション層からドメイン層へのアクセスポイントとなる
 * StaffListEntityを使ってスタッフ一覧を取得する
 */
class StaffFacade
{
    /**
     * @var StaffRepositoryInterface
     */
    private $staffRepository;

    /**
     * コンストラクタ
     *
     * @param StaffRepositoryInterface $staffRepository
     */
    public function __construct(StaffRepositoryInterface $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    /**
     * スタッフ一覧を取得する
     *
     * @return Collection スタッフエンティティのコレクション
     */
    public function getStaffList(): Collection
    {
        $staffListEntity = new StaffListEntity($this->staffRepository);
        return $staffListEntity->getStaffList();
    }
}
