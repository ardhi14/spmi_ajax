<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Triwulan extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'triwulan_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'triwulan_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true
			],

		]);

		// Membuat primary key
		$this->forge->addKey('triwulan_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('triwulan', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('triwulan');
	}
}
