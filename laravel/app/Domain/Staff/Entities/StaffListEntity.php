<?php

namespace App\Domain\Staff\Entities;

use App\Domain\Staff\Entities\StaffEntity;
use App\Domain\Staff\Repositories\StaffRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * スタッフ一覧のエンティティクラス
 *
 * StaffRepositoryから取得したスタッフデータをStaffEntityに変換する責務を持つ
 * ビジネスロジックは含まない
 */
class StaffListEntity
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
        $staffData = $this->staffRepository->getStaffList();

        return $staffData->map(function ($staff) {
            return new StaffEntity(
                id: $staff->getId(),
                name: $staff->getName()
            );
        });
    }
}
