<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'business';
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $primaryKey = 'business_id';

    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
