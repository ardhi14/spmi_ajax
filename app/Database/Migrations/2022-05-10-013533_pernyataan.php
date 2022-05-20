<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pernyataan extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'pernyataan_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'pernyataan_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true
			],

		]);

		// Membuat primary key
		$this->forge->addKey('pernyataan_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('pernyataan', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('pernyataan');
	}
}
