<?php
namespace App\Domain\Staff\Entities;

/**
 * スタッフのエンティティクラス
 *
 * 不変の値オブジェクトとして扱う
 * ビジネスロジックは含まない
 */
class StaffEntity
{
    /**
     * スタッフID
     *
     * @var int
     */
    public $id;

    /**
     * スタッフ名
     *
     * @var string
     */
    public $name;

    /**
     * コンストラクタ
     *
     * @param int $id スタッフID
     * @param string $name スタッフ名
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * スタッフIDを取得する
     *
     * @return int スタッフID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * スタッフ名を取得する
     *
     * @return string スタッフ名
     */
    public function getName(): string
    {
        return $this->name;
    }
}