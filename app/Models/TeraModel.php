<?php

namespace App\Models;

use CodeIgniter\Model;

class TeraModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tera';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'no_order',
        'owner_name',
        'address',
        'business_type',
        'phone',
        'date_applicant',
        
    ];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
