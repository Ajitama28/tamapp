<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\LoginAsisten;

class AsistenController extends BaseController
{
    protected $AsistenModel;
    public function __construct()
    {
        $this->AsistenModel = new AsistenModel();
    }

    public function index()
    {
        return view('asisten/login');
    }
    public function tampil()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $asisten = $this->AsistenModel->findAll();
            $data = [
                'list' => $asisten,
                'title' => 'Daftar Asisten'
            ];

            return view('asisten/AsistenView', $data);
        } else {
            return view('/asisten/login');
        }
    }

    public function simpan()
    {
        $session = session();
        if ($session->has('pengguna')) {
            helper('form');

            if (!$this->request->is('post')) {
                return view('/asisten/simpan');
            }

            $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);

            $model = model(AsistenModel::class);

            $model->simpan($post);

            return view('/asisten/success');
        } else {
            return view('/asisten/login');
        }
    }
    public function update()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $db = \Config\Database::connect();
            $Builder = $db->table('asisten');

            helper('form');
            if (!$this->request->is('post')) {
                return view('/asisten/update');
            }
            $data = [
                'nama' => [$this->request->getPost('nama')],
                'praktikum' => [$this->request->getPost('praktikum')],
                'ipk' => [$this->request->getPost('ipk')],
            ];
            $Builder->where('nim', $this->request->getPost('nim'));
            $Builder->update($data);
            return view('/asisten/success');
        } else {
            return view('/asisten/login');
        }
    }
    public function delete()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $db = \Config\Database::connect();
            $builder = $db->table('asisten');
            helper('form');
            if (!$this->request->is('post')) {
                return view('/asisten/delete');
            }
            $post = $this->request->getPost([
                'nim'
            ]);
            $builder->where('nim', $post);
            $builder->delete();
            return view('/asisten/success');
        } else {
            return view('/asisten/login');
        }
    }
    public function search()
    {
        $session = session();
        if ($session->has('pengguna')) {
            if (!$this->request->is('post')) {
                return view('/asisten/search');
            }

            $nim = $this->request->getPost(['key']);

            $model = model(AsistenModel::class);
            $asisten = $model->ambil($nim['key']);

            $data = ['hasil' => $asisten];
            return view('/asisten/search', $data);
        } else {
            return view('/asisten/login');
        }
    }
    public function check()
    {
        $asisten = $this->AsistenModel->findAll();

        $data = [
            'list' => $asisten,
            'title' => 'Daftar Asisten'
        ];
        $model = model(LoginAsisten::class);
        $post = $this->request->getPost(['usr', 'pwd']);
        $user = $model->where('Username', $post['usr'])->first();
        $pass = $model->where('Password', $post['pwd'])->first();

        if ($user && $pass) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            return view('asisten/AsistenView', $data);
        } else {
            return view('/asisten/fail');
        }
    }
    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return View('asisten/login');
    }
}
