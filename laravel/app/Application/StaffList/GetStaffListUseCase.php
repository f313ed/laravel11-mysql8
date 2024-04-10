<?php

namespace App\Application\StaffList;

use App\Domain\Staff\StaffFacade;
use Illuminate\Support\Collection;

/**
 * スタッフ一覧を取得するユースケースクラス
 *
 * StaffFacadeを介してドメイン層のビジネスロジックを呼び出す
 * アプリケーション層の責務であるユースケースの調整を行う
 */
class GetStaffListUseCase
{
    /**
     * @var StaffFacade
     */
    private $staffFacade;

    /**
     * コンストラクタ
     *
     * @param StaffFacade $staffFacade
     */
    public function __construct(StaffFacade $staffFacade)
    {
        $this->staffFacade = $staffFacade;
    }

    /**
     * ユースケースを実行する
     *
     * @return Collection スタッフエンティティのコレクション
     */
    public function execute(): Collection
    {
        return $this->staffFacade->getAll();
    }
}
