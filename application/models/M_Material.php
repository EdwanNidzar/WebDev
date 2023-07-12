<?php

class M_Material extends CI_Model
{

    private $table = "materials";

    public function get_material()
    {
        $sql = "SELECT c.title,m.id, m.title_material, m.description_material, m.embed_link FROM materials AS m, courses AS c WHERE m.courses_id = c.id";
        return $this->db->query($sql)->result();
    }

    public function insert_material()
    {
        $data = [
            'courses_id' => $this->input->post('courses_id'),
            'title_material' => $this->input->post('title_material'),
            'description_material' => $this->input->post('description_material'),
            'embed_link' => $this->input->post('embed_link')
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

    public function get_material_byid($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update_material()
    {
        $data = [
            'courses_id' => $this->input->post('courses_id'),
            'title_material' => $this->input->post('title_material'),
            'description_material' => $this->input->post('description_material'),
            'embed_link' => $this->input->post('embed_link')
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

    public function delete_material($id)
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
}
