<?php

namespace App\Repositories;

class BaseRepository
{
    protected $obj;

    protected function __construct(object $obj)
    {
        $this->obj = $obj;
    }

    public function all(): object
    {
        return $this->obj->all();
    }

    public function find(int $id): object
    {
        return $this->obj->find($id);
    }

    public function findByColumn(string $column, $value): object
    {
        return $this->obj->where($column, $value)->get();
    }

    public function save(array $param)
    {
        return $this->obj->create($param);
    }

    public function update(int $id, array $param): bool
    {
        return $this->obj->find($id)->update($param);
    }

    public function destroy(int $id): bool
    {
        return $this->obj->find($id)->destroy($param);
    }
}
