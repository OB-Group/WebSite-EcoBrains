<?php

namespace App\Models;

use CodeIgniter\Model;

class InteresseTopicoModel extends Model
{
  protected $table      = 'tb_interessetopico';
  protected $primaryKey = 'id_interesseTopico';

  protected $returnType     = 'object';

  protected $allowedFields = [
    'aprov_interesseTopico',
    'id_topico',
    'id_coop',
  ];

  protected $beforeInsert = ['beforeInsert'];
  // protected $beforeUpdate = ['hashPassword'];

  protected $validationRules = [
    'inputTipo'        =>
    'required',

    'aprov_interesseTopico'         =>
    'min_length[1]',

    'id_topico'         =>
    'min_length[1]',

    'id_coop'         =>
    'min_length[1]',
  ];

  // protected $validationMessages = [
  //   'inputTipo'             => [
  //     'required'            => 'O campo tipo deve ser preenchido',
  //   ],
  //   'cnpj_coop'             => [
  //     'required'            => 'O campo CNPJ deve ser preenchido',
  //     'min_length'          => 'O campo CNPJ deve ser preenchido por completo',
  //     'is_unique'           => 'CNPJ já cadastrado',
  //   ],
  //   'nomeFantasia_coop'         => [
  //     'required'            => 'O campo nome fantasia deve ser preenchido',
  //     'alpha_numeric_space' => 'O campo nome fantasia deve ser preenchido por números e letras',
  //     'min_length'          => 'O campo nome fantasia deve ter no mínimo 5 caracteres',
  //     'max_length'          => 'O campo nome fantasia deve ter no máximo 100 caracteres',
  //   ],
  //   'razaoSoc_coop'            => [
  //     'required'            => 'O campo razão social deve ser preenchido',
  //     'alpha_numeric_space' => 'O campo razão social deve ser preenchido por números e letras',
  //     'min_length'          => 'O campo razão social deve ter no mínimo 5 caracteres',
  //     'max_length'          => 'O campo razão social deve ter no máximo 100 caracteres',
  //   ],
  //   'cep_coop'              => [
  //     'required'            => 'O campo CEP deve ser preenchido',
  //     'min_length'          => 'O campo CEP deve ter no mínimo 8',
  //   ],
  //   'numEnd_coop'           => [
  //     'required'            => 'O campo número deve ser preenchido',
  //     'alpha_numeric'       => 'O campo número deve ser preenchido por números',
  //     'greater_than'        => 'O campo número deve ser maior que 0',
  //     'max_length'          => 'O campo número deve ter no máximo 5 caracteres',
  //   ],
  //   'complemento_coop'      => [
  //     'alpha_numeric_space' => 'O campo número deve ser preenchido por números e letras',
  //     'max_length'          => 'O campo número deve ter no máximo 10 caracteres',
  //   ],
  //   'inputEnd'      => [
  //     'min_length'          => 'Digite um CEP valído',
  //   ],
  //   'tel_coop'      => [
  //     'min_length'          => 'Telefone deve conter no mínimo 10 números',
  //   ],
  //   'whatsapp_coop'      => [
  //     'min_length'          => 'Telefone deve conter no mínimo 11 números',
  //   ],
  // ];
}