<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelompok_pemeriksaan_model extends BF_Model
{

    protected $ENABLE_ADD;
    protected $ENABLE_MANAGE;
    protected $ENABLE_VIEW;
    protected $ENABLE_DELETE;

    public function __construct()
    {
        parent::__construct();

        $this->ENABLE_ADD     = has_permission('Kelompok_Pemeriksaan.Add');
        $this->ENABLE_MANAGE  = has_permission('Kelompok_Pemeriksaan.Manage');
        $this->ENABLE_VIEW    = has_permission('Kelompok_Pemeriksaan.View');
        $this->ENABLE_DELETE  = has_permission('Kelompok_Pemeriksaan.Delete');
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

    public function get_data_kelompok_pemeriksaan()
    {
        $draw = $this->input->post('draw');
        $length = $this->input->post('length');
        $start = $this->input->post('start');
        $search = $this->input->post('search');

        $this->db->select('a.id, a.id_kategori, a.nm_kategori, a.nm_kelompok,');
        $this->db->from('tr_kelompok_pemeriksaan a');
        $this->db->where('a.deleted_by', '');

        $db_clone1 = clone $this->db;
        $count_all = $db_clone1->count_all_results();

        if (!empty($search['value'])) {
            $this->db->group_start();
            $this->db->like('a.nm_kategori', $search['value'], 'both');
            $this->db->or_like('a.nm_kelompok', $search['value'], 'both');
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
                $btn_delete = '<button type="button" class="btn btn-sm btn-danger del" data-id="' . $item->id . '" title="Delete Kelompok Pemeriksaan"><i class="fa fa-trash"></i> </button>';
            }

            $btn_edit = '';
            if ($this->ENABLE_MANAGE) {
                $btn_edit = '<button type="button" class="btn btn-sm btn-warning edit" data-id="' . $item->id . '" title="Edit Kelompok Pemeriksaan"><i class="fa fa-edit"></i></button>';
            }

            $action = $btn_delete . ' ' . $btn_edit;

            $hasil[] = [
                'no' => $no,
                'kategori' => $item->nm_kategori,
                'kelompok_pemeriksaan' => $item->nm_kelompok,
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
