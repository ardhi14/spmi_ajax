<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tahun extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'tahun_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'tahun'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

		]);

		// Membuat primary key
		$this->forge->addKey('tahun_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('tahun', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('tahun');
	}
}
