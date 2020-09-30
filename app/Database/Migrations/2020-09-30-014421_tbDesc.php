<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbDesc extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_desc'          	=> [
				'type'           	=> 'INT',
				'auto_increment' 	=> true,
			],
			'info_desc'        	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '150',
				'null' 					 	=> true,
			],
			'logo_desc'        	=> [
				'type'           	=> 'BLOB',
				'null' 					 	=> true,
			],
			'banner_desc'      	=> [
				'type'           	=> 'BLOB',
				'null' 					 	=> true,
			],
			'tempoMercado_desc' => [
				'type'           	=> 'DATE',
				'null' 					 	=> true,
			],
			'site_desc'        	=> [
				'type'           	=> 'VARCHAR',
				'constraint'		 	=> '45',
				'null' 					 	=> true,
			],
			'premium_desc'			=> [
				'type'           	=> 'CHAR',
				'constraint'		 	=> '1',
				'null' 					 	=> true,
			],
		]);

		$this->forge->addPrimaryKey('id_desc');

		$this->forge->createTable('id_desc');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('id_desc');
	}
}