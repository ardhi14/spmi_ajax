<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Standar extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'standar_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'standar_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

		]);

		// Membuat primary key
		$this->forge->addKey('standar_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('standar', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('standar');
	}
}
