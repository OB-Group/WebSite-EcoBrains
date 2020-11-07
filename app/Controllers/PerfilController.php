<?php

namespace App\Controllers;

use App\Models\UpdateDescModel;
use App\Models\UpdateDadosModel;

class PerfilController extends BaseController
{

  public function viewPerfil()
  {
    helper(['auth', 'validation']);

    $user = getBasicUserInfo();

    $data['user'] = $user;
    $data['titulo'] = 'Pesquisar Tópicos';
    $data['nome'] = $user->nomeFantasia_dados;
    return view('perfil/view-perfil/index', $data);
  }

  public function editarPerfil()
  {
    helper(['form', 'auth', 'validation']);
    $user = getBasicUserInfo();
    $uri = new \CodeIgniter\HTTP\URI(current_url());

    $dadosModel = new UpdateDadosModel();
    $descModel = new UpdateDescModel();

    if ($this->request->getMethod() == 'post') {

      $dadosModel->set('cnpj_dados', onlyNumbers($this->request->getPost('inputCNPJ')));
      $dadosModel->set('nomeFantasia_dados', $this->request->getPost('inputFantasia'));
      $dadosModel->set('razaoSoc_dados', $this->request->getPost('inputRazao'));
      $dadosModel->set('cep_dados', onlyNumbers($this->request->getPost('inputCEP')));
      $dadosModel->set('numEnd_dados', $this->request->getPost('inputNumEnd'));
      $dadosModel->set('complemento_dados', $this->request->getPost('inputComplemento'));
      $dadosModel->set('inputEnd', $this->request->getPost('inputEnd'));
      $dadosModel->set('tel_dados', onlyNumbers($this->request->getPost('inputTel')));
      $dadosModel->set('whatsapp_dados', onlyNumbers($this->request->getPost('inputWhats')));

      $descModel->set('info_desc', $this->request->getPost('inputTxtArea'));
      $descModel->set('logo_desc', $this->request->getPost('inputLogo'));
      $descModel->set('banner_desc', $this->request->getPost('inputBanner'));
      $descModel->set('tempoMercado_desc', $this->request->getPost('inputTempMercado'));
      $descModel->set('site_desc', $this->request->getPost('inputSite'));


      if ($dadosModel->update($user->id_dados))
        if ($descModel->update($user->id_desc))
          return redirect()->to('/' . $uri->getSegment(1) . '/perfil');
        else
          $data['errors'] = $descModel->errors();
      else
        $data['errors'] = $dadosModel->errors();
    }

    $data['user'] = $user;
    $data['titulo'] = 'Pesquisar Tópicos';
    $data['nome'] = $user->nomeFantasia_dados;

    return view('perfil/editar-perfil/index', $data);
  }
}
