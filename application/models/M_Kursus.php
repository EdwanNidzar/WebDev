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
        //pesan notif
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Gagal ditambahkan!');
            $this->session->set_flashdata('status', false);
        }
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
        //pesan notif
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil diperbaharui!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Gagal diperbaharui!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function delete_courses($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        //pesan notif
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Gagal dihapus!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function get_courses_byname($id)
    {
        $sql = "SELECT c.title, m.id, m.title_material, m.description_material, m.embed_link FROM materials AS m, courses AS c WHERE m.courses_id = c.id AND c.id = '$id' ";
        return $this->db->query($sql)->result();
    }
}
