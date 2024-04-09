<?php

namespace App\Domain\Staff\Repositories;

use Illuminate\Support\Collection;

/**
 * スタッフデータの永続化層へのアクセスを抽象化するインターフェース
 *
 * 実装の詳細をドメイン層から隠蔽し、依存関係を逆転させる
 */
interface StaffRepositoryInterface
{
    /**
     * スタッフ一覧を取得する
     *
     * @return Collection スタッフエンティティのコレクション
     */
    public function getStaffList(): Collection;
}
