<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\DescModel;

class TopicoModel extends Model
{
  protected $table      = 'tb_topico';
  protected $primaryKey = 'id_topico';

  protected $returnType     = 'object';

  protected $allowedFields = [
    'titulo_topico',
    'dataLimite_topico',
    'id_empresa',
  ];

  protected $validationRules = [
    'titulo_topico'    =>
    'required|string|min_length[5]|max_length[100]',

    'dataLimite_topico'         =>
    'required|min_length[8]|max_length[10]',
  ];

}
