<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transactions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_customer', 'id_company', 'id_courier', 'nama_device', 'keluhan', 'ppn', 'total_harga', 'bukti_pembayaran', 'status_transaksi'];

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

    public function getTransactionsData($val = false)
    {
        if (is_numeric($val)) {
            return $this->find($val);
        }

        if (is_string($val)) {
            return $this->where(['id' => $val])->first();
        }

        return $this->findAll();
    }

    public function join3table($transaksi)
    {
        $builder = $this->db->table('transactions');
        $builder->select('transactions.id, customers.nama_cus, companies.nama_com, companies.harga_com, nama_device, companies.jenis_devices, couriers.nama_kurir, couriers.harga_kurir, keluhan, ppn, total_harga, bukti_pembayaran, status_transaksi, created_at');
        $builder->join('customers', 'customers.id = transactions.id_customer');
        $builder->join('companies', 'companies.id = transactions.id_company');
        $builder->join('couriers', 'couriers.id = transactions.id_courier');
        $builder->where(['id_customer' => $transaksi]);
        return $builder->get()->getResult();
    }

    public function joinTableForCompany($transaksi)
    {
        $builder = $this->db->table('transactions');
        $builder->select('transactions.id, customers.nama_cus, companies.nama_com, companies.harga_com, nama_device, companies.jenis_devices, couriers.nama_kurir, couriers.harga_kurir, keluhan, ppn, total_harga, bukti_pembayaran, status_transaksi, created_at');
        $builder->join('customers', 'customers.id = transactions.id_customer');
        $builder->join('companies', 'companies.id = transactions.id_company');
        $builder->join('couriers', 'couriers.id = transactions.id_courier');
        $builder->where(['id_company' => $transaksi, 'status_transaksi' => 'transaksi selesai']);
        return $builder->get()->getResult();
    }

    public function jointransaksicom($transaksi)
    {
        $builder = $this->db->table('transactions');
        $builder->select('transactions.id, customers.nama_cus, companies.nama_com, companies.harga_com, nama_device, companies.jenis_devices, couriers.nama_kurir, couriers.harga_kurir, keluhan, ppn, total_harga, bukti_pembayaran, status_transaksi, created_at');
        $builder->join('customers', 'customers.id = transactions.id_customer');
        $builder->join('companies', 'companies.id = transactions.id_company');
        $builder->join('couriers', 'couriers.id = transactions.id_courier');
        $builder->where(['id_company'=>$transaksi]);
        return $builder->get()->getResult();
    }

    public function join3tableSA()
    {
        $builder = $this->db->table('transactions');
        $builder->select('customers.nama_cus, companies.nama_com, companies.harga_com, nama_device, companies.jenis_devices, couriers.nama_kurir, couriers.harga_kurir, keluhan, ppn, total_harga, bukti_pembayaran, status_transaksi, created_at');
        $builder->join('customers', 'customers.id = transactions.id_customer');
        $builder->join('companies', 'companies.id = transactions.id_company');
        $builder->join('couriers', 'couriers.id = transactions.id_courier');
        return $builder->get()->getResult();
    }
}
