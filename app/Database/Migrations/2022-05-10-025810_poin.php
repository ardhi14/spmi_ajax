<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Poin extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel karyawan
		$this->forge->addField([
			'poin_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => false,
				'auto_increment' => true
			],
			'poin_alasan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true
			],
			'poin_tahun_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'			 => true
			],
			'poin_standar_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'			 => true
			],
			'poin_parameter_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'			 => true
			],
			'poin_pernyataan_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'			 => true
			],
		]);

		// Membuat primary key
		$this->forge->addKey('poin_id', TRUE);

		// Membuat tabel karyawan
		$this->forge->createTable('poin', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('poin');
	}
}
