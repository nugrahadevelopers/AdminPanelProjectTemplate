<?php

namespace App\Services;

use App\Traits\APPResponse;
use Illuminate\Support\Facades\DB;

class ModelCRUDService
{
    use APPResponse;

    public function create(array $data, $model)
    {
        try {
            $result = $model->create($data);
            return $this->success('Data berhasil di masukan', $result);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), $th->getCode());
        }
    }

    public function update(array $data, $model)
    {
        try {
            $result = $model->update(array_filter($data));
            return $this->success('Data berhasil di ubah', $result);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), $th->getCode());
        }
    }

    public function delete($model)
    {
        try {
            $result = $model->delete();
            return $this->success('Data berhasil di hapus', $result);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), $th->getCode());
        }
    }
}
