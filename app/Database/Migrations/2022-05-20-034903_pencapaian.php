<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pencapaian extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'pencapaian_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'pencapaian'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true
			],
			'pencapaian_poin_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'			 => true
			],
		]);

		// Membuat primary key
		$this->forge->addKey('pencapaian_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('pencapaian', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('pencapaian');
	}
}
