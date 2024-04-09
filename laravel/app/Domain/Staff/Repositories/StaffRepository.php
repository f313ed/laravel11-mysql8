<?php

namespace App\Domain\Staff\Repositories;

use App\Models\Staff;
use App\Domain\Staff\Entities\StaffEntity;
use Illuminate\Support\Collection;

/**
 * StaffRepositoryの実装クラス
 *
 * スタッフデータの永続化層へのアクセスを担当する
 * EloquentのStaffモデルを使ってデータベースからスタッフデータを取得し、StaffEntityに変換して返す
 */
class StaffRepository implements StaffRepositoryInterface
{
    /**
     * スタッフ一覧を取得する
     *
     * @return Collection スタッフエンティティのコレクション
     */
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
