<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use App\Repositories\Interfaces\BaseRepositoryInterface;

/** 
 * Class BaseService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(
        Model $model
    ){
        $this->model = $model;
    }

    public function all(){
        return $this->model->all();
    }
    public function findById(
        int $modelId,
        array $column = ['*'],
        array $relation = []
    ){
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
    }
}
