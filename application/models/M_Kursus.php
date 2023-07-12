<?php

class M_Kursus extends CI_Model
{

    private $table = "courses";

    public function get_courses()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert_courses()
    {
        $data = [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'duration' => $this->input->post('duration')
        ];
        $this->db->insert($this->table, $data);
    }

    public function get_courses_byid($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update_courses()
    {
        $data = [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'duration' => $this->input->post('duration')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->table, $data);
    }

    public function delete_courses($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
