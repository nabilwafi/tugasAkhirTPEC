<?php

namespace App\Models;

use CodeIgniter\Model;

class CouriersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'couriers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kurir', 'harga_kurir'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getCourierData($val = false, $column = '')
    {
        if (is_numeric($val)) {
            return $this->find($val);
        }

        if (is_string($val) && !$column) {
            return $this->where(['email' => $val])->first();
        }

        if (is_string($val) && $column) {
            return $this->where([$column => $val])->findAll();
        }

        return $this->findAll();
    }
}
