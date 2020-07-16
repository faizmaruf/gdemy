<?php

class UserModel extends CI_Model
{
    private const TABLE_NAME = 'courses';

    public function getAll()
    {
        return $this->db->get(static::TABLE_NAME)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where(static::TABLE_NAME, ['id' => $id])->row_array();
    }

    public function getByName($name)
    {
        return $this->db->get_where(static::TABLE_NAME, ['name' => $name])->row_array();
    }

    public function save($data)
    {
        $this->db->insert(static::TABLE_NAME, $data);
    }

    public function update($where, $data)
    {
        $this->db->where($where);
        $this->db->update(static::TABLE_NAME, $data);
    }
}
