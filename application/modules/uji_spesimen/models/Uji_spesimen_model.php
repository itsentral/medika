<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Uji_spesimen_model extends BF_Model
{

  public function __construct()
  {
    parent::__construct();

    $ENABLE_ADD     = has_permission('Approval_PO.Add');
    $ENABLE_MANAGE  = has_permission('Approval_PO.Manage');
    $ENABLE_VIEW    = has_permission('Approval_PO.View');
    $ENABLE_DELETE  = has_permission('Approval_PO.Delete');
  }

  public function get_data($table, $where_field = '', $where_value = '')
  {
    if ($where_field != '' && $where_value != '') {
      $query = $this->db->get_where($table, array($where_field => $where_value));
    } else {
      $query = $this->db->get($table);
    }

    return $query->result();
  }

  public function get_data_group($table, $where_field = '', $where_value = '', $where_group = '')
  {
    if ($where_field != '' && $where_value != '') {
      $query = $this->db->group_by($where_group)->get_where($table, array($where_field => $where_value));
    } else {
      $query = $this->db->get($table);
    }

    return $query->result();
  }

  public function getDataUji()
  {

    $requestData  = $_REQUEST;
    $id_alat      = $requestData['id_alat'];
    $search       = $requestData['search']['value'];
    $column_order = isset($requestData['order'][0]['column']) ? $requestData['order'][0]['column'] : 0;
    $column_dir   = isset($requestData['order'][0]['dir']) ? $requestData['order'][0]['dir'] : 'asc';
    $limit_start  = $requestData['start'];
    $limit_length = $requestData['length'];

    $columns_order_by = [
      0 => 'nomor',
      1 => 'nama_pasien',
      2 => 'tgl_lahir',
      3 => 'revisi',
      4 => 'status'
    ];

    $this->db->from('dumy_rs_pengujian_spesimen');
    // $this->db->where('id_alat', $id_alat);
    $totalData = $this->db->count_all_results();

    // ===== Query utama dengan filter & pencarian =====
    $this->db->from('dumy_rs_pengujian_spesimen');
    if ($id_alat) {
      $this->db->where('id_alat', $id_alat);
    }

    if (!empty($search)) {
      $this->db->group_start();
      $this->db->like('nomor', $search);
      $this->db->or_like('nama_pasien', $search);
      $this->db->or_like('tgl_lahir', $search);
      $this->db->or_like('status', $search);
      $this->db->group_end();
    }
    // hitung total filtered
    $totalFiltered = $this->db->count_all_results('', FALSE);

    // order dan limit
    $order_col = isset($columns_order_by[$column_order]) ? $columns_order_by[$column_order] : 'nomor';
    $this->db->order_by($order_col, $column_dir);
    $this->db->limit($limit_length, $limit_start);

    $query = $this->db->get();

    $data  = array();
    $urut1  = 1;
    $urut2  = 0;

    foreach ($query->result_array() as $row) {
      $total_data     = $totalData;
      $start_dari     = $requestData['start'];
      $asc_desc       = $column_dir;
      if ($asc_desc == 'asc') {
        $nomor = $urut1 + $start_dari;
      }
      if ($asc_desc == 'desc') {
        $nomor = ($total_data - $start_dari) - $urut2;
      }

      $status = [
        0 => "<div class='badge badge-danger'>Belum Uji</div>",
        1 => "<div class='badge badge-warning'>Menunggu Verifikasi</div>",
        2 => "<div class='badge badge-info'>Menuggu Validasi</div>",
        3 => "<div class='badge badge-success'>Selesai Uji</div>",
      ];

      $button = '';
      $button .= " <button type='button' data-id='" . $row['id'] . "' class='btn btn-info btn-icon' data-bs-toggle='modal' data-bs-target='#staticBackdrop' title='Lihat'><i class='fa fa-eye'></i></button>";
      if ($row['status'] != 3) {
        $button = "<button type='button' data-id='" . $row['id'] . "' class='btn btn-success btn-icon' data-bs-toggle='modal' data-bs-target='#staticBackdrop' title='Uji'><i class='fa fa-microscope'></i></button>";
      }



      $nestedData   = array();
      $nestedData[]  = $nomor;
      $nestedData[]  = $row['nama_pasien'];
      $nestedData[]  = date('d F Y', strtotime($row['tgl_lahir']));
      $nestedData[]  = $row['revisi'];
      $nestedData[]  = $status[$row['status']];
      $nestedData[]  = $button;

      $data[] = $nestedData;
      $urut1++;
      $urut2++;
    }

    $json_data = array(
      "draw"              => intval($requestData['draw']),
      "recordsTotal"      => intval($totalData),
      "recordsFiltered"   => intval($totalFiltered),
      "data"              => $data
    );

    echo json_encode($json_data);
  }
}
