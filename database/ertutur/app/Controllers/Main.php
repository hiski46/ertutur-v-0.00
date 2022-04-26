<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Merga;
use CodeIgniter\Database\Query;

class Main extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new Merga();
    }
    public function index()
    {
        echo view('main');
    }

    public function ertutur()
    {
        $data['limaMerga'] = $this->model->limaMerga();
        return view('components/ertutur', $data);
    }

    public function all_merga($id)
    {
        $merga =  $this->model->where('id_merga', $id)->findAll();
        return json_encode($merga);
    }

    public function tampilHasil()
    {
        // $data = $this->request->getPost('name');

        $query = '';
        if ($this->request->isAJAX()) {
            $query = service('request')->getPost('values');
            // orang 1
            $jk1 = $query[0]['value'];
            $sub_mer1 = $query[1]['value'];
            $merga1 = $query[2]['value'];
            $sub_bre1 = $query[3]['value'];
            $bre1 = $query[4]['value'];
            //  orang 2
            $jk2 = $query[5]['value'];
            $sub_mer2 = $query[6]['value'];
            $merga2 = $query[7]['value'];
            $sub_bre2 = $query[8]['value'];
            $bre2 = $query[9]['value'];


            if ($sub_mer1 == '0' || $sub_mer2 == '0' || $sub_bre1 == '0' || $sub_bre2 == '0') {
                return 'Harus isi ndu Lebe kerina';
            } else {
                if ($merga1 == $bre1 || $sub_mer1 == $sub_bre1 || $merga2 == $bre2 || $sub_mer2 == $sub_bre2) {
                    return 'Ena la lit Adatna';
                }
            }



            //jk sama
            if ($jk1 == $jk2) {
                if ($merga1 == $merga2) {
                    return 'Sembuyak';
                }
                if ($sub_mer1 == $sub_mer2) {
                    return 'Senina';
                }
                if ($bre1 == $bre2 || $sub_bre1 == $sub_bre2) {
                    return 'Senina Sipemeren';
                }
                // adi merga ras bebere seri
                if ($merga1 == $bre2 || $sub_mer1 == $sub_bre2 || $merga2 == $bre2 || $sub_mer2 == $sub_bre1) {
                    // dilaki-dilaki
                    if ($jk1 == 0) {
                        if ($jk2 == 0) {
                            return 'Impal';
                        }
                    }
                    // diberu - diberu
                    if ($jk1 == 1) {
                        if ($jk2 == 1) {
                            return 'Impal';
                        }
                    }
                }
            }
            //jk berbeda
            if ($jk1 != $jk2) {
                if ($merga1 == $merga2) {
                    return 'Turang';
                }
                if ($sub_mer1 == $sub_mer2) {
                    return 'Turang';
                }
                if ($bre1 == $bre2 || $sub_bre1 == $sub_bre2) {
                    return 'Turang (Sipemeren)';
                }
                // adi merga ras bebere seri
                if ($merga1 == $bre2 || $sub_mer1 == $sub_bre2) {
                    // dilaki - diberu
                    if ($jk1 == 0) {
                        if ($jk2 == 1) {
                            return 'Turang Impal';
                        }
                    }
                    // diberu - dilaki
                    if ($jk1 == 1) {
                        if ($jk2 == 0) {
                            return 'Impal';
                        }
                    }
                }
                if ($merga2 == $bre1 || $sub_mer2 == $sub_bre1) {
                    // dilaki - diberu
                    if ($jk1 == 0) {
                        if ($jk2 == 1) {
                            return 'Impal';
                        }
                    }
                    // diberu - dilaki
                    if ($jk1 == 1) {
                        if ($jk2 == 0) {
                            return 'Turang Impal';
                        }
                    }
                }
            }
        }
    }
}
