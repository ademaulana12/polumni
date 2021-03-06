<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_validation_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function bio_valid()
    {
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            [
                'field' => 'tempat_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'error' => [
                    'required' => 'Tempat lahir tidak boleh kosong'
                ]
            ],
            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'error' => [
                    'required' => 'Tanggal lahir tidak boleh kosong'
                ]
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'error' => [
                    'required' => 'Jenis kelamin harus di pilih'
                ]
            ],
            [
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required',
                'error' => [
                    'required' => 'Agama harus di pilih'
                ]
            ],
            [
                'field' => 'telepon',
                'label' => 'Telepon',
                'rules' => 'required|numeric|max_length[13]',
                'error' => [
                    'required' => 'Tanggal lahir tidak boleh kosong',
                    'numeric' => 'Harus berupa angka',
                    'max_length' => 'Maksimal 13 karakter'
                ]
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
                'error' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            [
                'field' => 'tahun_lulus',
                'label' => 'Tahun Lulus',
                'rules' => 'required',
                'error' => [
                    'required' => 'Tahun lulus harus di pilih'
                ]
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ]
        ];

        $this->form_validation->set_rules($config);
    }
}
