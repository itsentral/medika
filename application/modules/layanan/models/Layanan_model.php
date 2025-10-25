<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Yunas Handra
 * @copyright Copyright (c) 2018, Yunas Handra
 *
 * This is model class for table "Customer"
 */

class Layanan_model extends BF_Model
{

    /**
     * @var string  User Table Name
     */
    protected $table_name = 'rs_kategorilab';
    protected $key        = 'id_kategori'; 

    /**
     * @var string Field name to use for the created time column in the DB table
     * if $set_created is enabled.
     */
    protected $created_field = 'created_on';

    /**
     * @var string Field name to use for the modified time column in the DB
     * table if $set_modified is enabled.
     */
    protected $modified_field = 'modified_on';

    /**
     * @var bool Set the created time automatically on a new record (if true)
     */
    protected $set_created = true;

    /**
     * @var bool Set the modified time automatically on editing a record (if true)
     */
    protected $set_modified = true;
    /**
     * @var string The type of date/time field used for $created_field and $modified_field.
     * Valid values are 'int', 'datetime', 'date'.
     */
    /**
     * @var bool Enable/Disable soft deletes.
     * If false, the delete() method will perform a delete of that row.
     * If true, the value in $deleted_field will be set to 1.
     */
    protected $soft_deletes = true;

    protected $date_format = 'datetime';

    /**
     * @var bool If true, will log user id in $created_by_field, $modified_by_field,
     * and $deleted_by_field.
     */
    protected $log_user = true;

    /**
     * Function construct used to load some library, do some actions, etc.
     */
    public function __construct()
    {
        parent::__construct();
    }
	
	
    function generate_id($kode='') {
      $query = $this->db->query("SELECT MAX(id_kategori) as max_id FROM rs_kategorilab");
      $row = $query->row();
      $bln = date('m');
      $thn = date('y');
      $max_id = $row->max_id;
      $max_id1 =(int) substr($max_id,6,3);
      $counter = $max_id1 +1;
      $idcust = "KL".$thn.$bln.str_pad($counter, 3, "0", STR_PAD_LEFT);
      return $idcust;
	}

 	public function get_data($table,$where_field='',$where_value=''){
		if($where_field !='' && $where_value!=''){
			$query = $this->db->get_where($table, array($where_field=>$where_value));
		}else{
			$query = $this->db->get($table);
		}
		
		return $query->result();
	}
	
    function getById($id)
    {
       return $this->db->get_where('ms_inventory_type',array('id_type' => $id))->row_array();
    }


    //SERVER SIDE
	public function get_data_json_inv()
	{
        $ENABLE_ADD     = has_permission('Pendaftaran.Add');
		$ENABLE_MANAGE  = has_permission('Pendaftaran.Manage');
		$ENABLE_VIEW    = has_permission('Pendaftaran.View');
		$ENABLE_DELETE  = has_permission('Pendaftaran.Delete');
		
		$requestData	= $_REQUEST;
		$fetch			= $this->query_data_inv(
			$requestData['search']['value'],
			$requestData['order'][0]['column'],
			$requestData['order'][0]['dir'],
			$requestData['start'],
			$requestData['length']
		);
		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		$urut1  = 1;
		$urut2  = 0;
		foreach ($query->result_array() as $row) {
			$total_data     = $totalData;
			$start_dari     = $requestData['start'];
			$asc_desc       = $requestData['order'][0]['dir'];
			if ($asc_desc == 'asc') {
				$nomor = $urut1 + $start_dari;
			}
			if ($asc_desc == 'desc') {
				$nomor = ($total_data - $start_dari) - $urut2;
			}


			$edit = 'edit';

			$jenis_daftar = $row['deleted'];

			 if ($jenis_daftar ==0)			  {
			      $via = 'Aktif';
			  }else{
				  $via = 'Non Aktif';
			  }

			$nestedData 	= array();
			$nestedData[]	= "<div align='center'>" . $nomor . "</div>";
			$nestedData[]	= "<div align='left'>" . $row['id_kategori'] . "</div>";
			$nestedData[]	= "<div align='left'>" . $row['nama_kategori'] . "</div>";
            $nestedData[]	= "<div align='left'>" . $via . "</div>";
			$priX	= "";
			$updX	= "";
			$ApprvX	= "";
			$Edit	= "";
			$Print	= "";
			$Hist	= "";
			$ApprvX2Edit = "";

			if ($ENABLE_MANAGE) {
				//$Terima	= "<button class='btn btn-sm btn-success edit' title='Create Penerimaan' data-inv='" . $row['no_invoice'] . "'><i class='fa fa-list'></i></button>";
			$Terima	=  "<a class='btn btn-success btn-xs edit' href='javascript:void(0)' title='Edit' data-id_kategori='" . $row['id_kategori'] . "'><i class='fa fa-edit'></i>
				</a>";

            $Hapus	=  "<a class='btn btn-success btn-xs delete' href='javascript:void(0)' title='Hapus' data-id_kategori='" . $row['id_kategori'] . "'><i class='fa fa-trash'></i>
				</a>";
			
			}
			$nestedData[]	= "<div align='center'>
									" . $Terima.$Hapus."
									</div>";
			$data[] = $nestedData;
			$urut1++;
			$urut2++;
		}

		$json_data = array(
			"draw"            	=> intval($requestData['draw']),
			"recordsTotal"    	=> intval($totalData),
			"recordsFiltered" 	=> intval($totalFiltered),
			"data"            	=> $data
		);

		echo json_encode($json_data);
	}

	public function query_data_inv($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
        $session = $this->session->userdata('app_session');  
		$cab     = $session['kdcab'];
		$sql = "SELECT a.*
	         FROM rs_pasien as a 
			
	        )";
		//echo $this->db->query($sql)->row(); exit;

		$data['totalData'] = $this->db->query($sql)->num_rows();
		$data['totalFiltered'] = $this->db->query($sql)->num_rows();
		$columns_order_by = array(
			0 => 'nomor',
			1 => 'id_kategori',
			2 => 'nama_kategori'
		);

		$sql .= " ORDER BY a.id_kategori ASC, " . $columns_order_by[$column_order] . " " . $column_dir . " ";
		$sql .= " LIMIT " . $limit_start . " ," . $limit_length . " ";
		$data['query'] = $this->db->query($sql);
		return $data;
	}

   

}
