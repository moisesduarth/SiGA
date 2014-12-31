<?php
class Migration_Cria_tabela_de_grupos_de_usuario extends CI_migration {

	public function up() {
		// Group table
		$this->dbforge->add_field(array(
				'id_group' => array('type' => 'INT','auto_increment' => true),
				'group_name' => array('type' => 'varchar(20)')
		));
		$this->dbforge->add_key('id_group', true);
		$this->dbforge->create_table('group');

		// Group values
		$object = array('id_group' => 1, 'group_name' => 'financeiro');
		$this->db->insert('group', $object);
		$object = array('id_group' => 2, 'group_name' => 'administrativo');
		$this->db->insert('group', $object);
		$object = array('id_group' => 3, 'group_name' => 'administrador');
		$this->db->insert('group', $object);

	}

	public function down() {
		$this->dbforge->drop_table('group');
	}
}
