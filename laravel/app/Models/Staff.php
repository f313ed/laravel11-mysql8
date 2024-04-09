<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquentのスタッフモデルクラス
 *
 * データベースのstaffsテーブルに対応する
 * ドメイン層からは直接使用せず、StaffRepositoryを介して間接的に使用する
 */
class Staff extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * モデルに関連付けるテーブル名
     *
     * @var string
     */
    protected $table = 'staffs';

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
