<?php

namespace App\Models;

use CodeIgniter\Model;

class Merga extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'all_merga';
    protected $primaryKey       = 'id_all_merga';

    public function limaMerga()
    {
        $db      = \Config\Database::connect();
        $query = $db->table('merga');
        // return $query->select('*')->getCompiledSelect();
        return  $query->get()->getResultArray();
    }
}
