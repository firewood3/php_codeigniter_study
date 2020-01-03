<?php
class Item_model extends CI_Model {
  function __construct()
  {
    parent::__construct();
  }

  public function gets()
  {
    return $this->db->query('SELECT * FROM items')->result();
  }

  public function get($item_id)
  {
    // return $this->db->get_where('item', array('id'=>topic_id))->row();
    return $this->db->query('SELECT * FROM items WHERE id='.item_id);
  }
}
