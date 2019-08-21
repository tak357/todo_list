<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{

    /**
     * 状態定義
     */

     const STATUS = 
     [
         1 => ['label' => '未着手', 'class' => 'label-danger'],
         2 => ['label' => '着手中', 'class' => 'label-info'],
         3 => ['label' => '完了', 'class' => ''],
     ];

    /**
     * 状態を表すHTMLクラス
     * @return string
     */

    public function getStatusClassAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if(!isset(self::STATUS[$status]))
        {
            return '';
        }

        return self::STATUS[$status]['class'];
    }

     /**
     * 状態のラベル
     * @return string
     */

    public function getStatusLabelAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if(!isset(self::STATUS[$status]))
        {
            return '';
        }

        return self::STATUS[$status]['label'];
    }

    public function getGenderTextAttribute()
    {
        switch($this->attributes['gender'])
        {
            case 1:
                return 'male';
            case 2:
                return 'female';
            default:
                return '??';
        }
    }

    /**
     * 整形した期限日
     * @return string
     */

    public function getFormattedDueDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d',$this->attributes['due_date'])
            ->format('Y/m/d');
    }
}
