<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pemeriksaan_model extends BF_Model
{

    protected $ENABLE_ADD;
    protected $ENABLE_MANAGE;
    protected $ENABLE_VIEW;
    protected $ENABLE_DELETE;

    public function __construct()
    {
        parent::__construct();

        $this->ENABLE_ADD     = has_permission('Pemeriksaan.Add');
        $this->ENABLE_MANAGE  = has_permission('Pemeriksaan.Manage');
        $this->ENABLE_VIEW    = has_permission('Pemeriksaan.View');
        $this->ENABLE_DELETE  = has_permission('Pemeriksaan.Delete');
    }

    public function get_all_kategori()
    {
        $get_all_kategori = $this->db->get_where('rs_kategorilab', ['deleted' => '0'])->result();

        return $get_all_kategori;
    }

    public function get_kategori($id)
    {
        $get_kategori = $this->db->get_where('rs_kategorilab', ['id_kategori' => $id])->row();

        return $get_kategori;
    }

    public function get_kelompok_pemeriksaan($id)
    {
        $get_kelompok_pemeriksaan = $this->db->get_where('tr_kelompok_pemeriksaan', ['id' => $id])->row();

        return $get_kelompok_pemeriksaan;
    }

    public function get_pemeriksaan($id)
    {
        $this->db->select('a.*');
        $this->db->from('tr_pemeriksaan a');
        $this->db->where('a.deleted_by', null);
        $get_pemeriksaan = $this->db->get()->row();

        return $get_pemeriksaan;
    }

    public function get_kelompok_pemeriksaan_where($where = null, $value = null)
    {
        $this->db->select('a.*');
        $this->db->from('tr_kelompok_pemeriksaan a');
        $this->db->where('a.deleted_by', '');

        if (!empty($where)) {
            $this->db->where($where, $value);
        }

        $get_data = $this->db->get()->result();

        return $get_data;
    }

    public function get_kelompok_based_kategori($id_kategori)
    {
        $this->db->select('a.*');
        $this->db->from('tr_kelompok_pemeriksaan a');
        $this->db->where('a.id_kategori', $id_kategori);
        $this->db->where('a.deleted_by', '');
        $get_data = $this->db->get()->result();

        return $get_data;
    }

    public function get_data_pemeriksaan()
    {
        $draw = $this->input->post('draw');
        $length = $this->input->post('length');
        $start = $this->input->post('start');
        $search = $this->input->post('search');

        $this->db->select('a.*');
        $this->db->from('tr_pemeriksaan a');
        $this->db->where('a.deleted_by', null);

        $db_clone1 = clone $this->db;
        $count_all = $db_clone1->count_all_results();

        if (!empty($search['value'])) {
            $this->db->group_start();
            $this->db->like('a.nm_kategori', $search['value'], 'both');
            $this->db->or_like('a.nm_kelompok', $search['value'], 'both');
            $this->db->or_like('a.nm_pemeriksaan', $search['value'], 'both');
            $this->db->group_end();
        }

        $db_clone2 = clone $this->db;
        $count_filter = $db_clone2->count_all_results();

        $this->db->order_by('a.id', 'desc');
        $this->db->limit($length, $start);

        $get_data = $this->db->get()->result();

        $no = (0 + $start);
        $hasil = [];

        foreach ($get_data as $item) {
            $no++;

            $btn_delete = '';
            if ($this->ENABLE_DELETE) {
                $btn_delete = '<button type="button" class="btn btn-sm btn-danger del" data-id="' . $item->id . '" title="Delete Pemeriksaan"><i class="fa fa-trash"></i> </button>';
            }

            $btn_edit = '';
            if ($this->ENABLE_MANAGE) {
                $btn_edit = '<button type="button" class="btn btn-sm btn-warning edit" data-id="' . $item->id . '" title="Edit Pemeriksaan"><i class="fa fa-edit"></i></button>';
            }

            $action = $btn_delete . ' ' . $btn_edit;

            $hasil[] = [
                'no' => $no,
                'kategori' => $item->nm_kategori,
                'kelompok_pemeriksaan' => $item->nm_kelompok_pemeriksaan,
                'pemeriksaan' => $item->nm_pemeriksaan,
                'action' => $action
            ];
        }

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $count_all,
            'recordsFiltered' => $count_filter,
            'data' => $hasil
        ];

        echo json_encode($response);
    }
}
