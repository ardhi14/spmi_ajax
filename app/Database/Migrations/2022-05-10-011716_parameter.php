<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parameter extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'parameter_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'parameter_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true
			],

		]);

		// Membuat primary key
		$this->forge->addKey('parameter_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('parameter', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('parameter');
	}
}
