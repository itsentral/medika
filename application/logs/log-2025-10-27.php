<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-10-27 09:03:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:17 --> Severity: Notice --> Undefined variable: nama_program /var/www/html/application/modules/users/views/login_animate.php 6
ERROR - 2025-10-27 09:03:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:03:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:03:23 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.asset_generate.category' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT
				SUM(a.nilai_asset) AS total_aset,
				SUM(a.`value`) AS total_susut,
				SUM(b.sisa_nilai) AS total_sisa
			FROM
				asset a LEFT JOIN asset_nilai b ON a.kd_asset = b.kd_asset
			WHERE 1=1
				AND a.deleted = 'N'
				
				
				AND (
				a.nm_asset LIKE '%%'
				OR a.category LIKE '%%'
	        )
ERROR - 2025-10-27 09:03:23 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/modules/asset/models/Asset_model.php 218
ERROR - 2025-10-27 09:05:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:05:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:52 --> Unable to connect to the database
ERROR - 2025-10-27 09:05:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:52 --> Severity: Warning --> session_start(): Failed to initialize storage module: user (path: ) /var/www/html/system/libraries/Session/Session.php 128
ERROR - 2025-10-27 09:05:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:52 --> Unable to connect to the database
ERROR - 2025-10-27 09:05:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:52 --> Unable to connect to the database
ERROR - 2025-10-27 09:05:52 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 401
ERROR - 2025-10-27 09:05:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:05:55 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:55 --> Unable to connect to the database
ERROR - 2025-10-27 09:05:55 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:55 --> Severity: Warning --> session_start(): Failed to initialize storage module: user (path: ) /var/www/html/system/libraries/Session/Session.php 128
ERROR - 2025-10-27 09:05:55 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:55 --> Unable to connect to the database
ERROR - 2025-10-27 09:05:55 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-10-27 09:05:55 --> Unable to connect to the database
ERROR - 2025-10-27 09:05:55 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /var/www/html/system/database/drivers/mysqli/mysqli_driver.php 401
ERROR - 2025-10-27 09:07:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:07:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:07:10 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.asset_generate.category' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT
				SUM(a.nilai_asset) AS total_aset,
				SUM(a.`value`) AS total_susut,
				SUM(b.sisa_nilai) AS total_sisa
			FROM
				asset a LEFT JOIN asset_nilai b ON a.kd_asset = b.kd_asset
			WHERE 1=1
				AND a.deleted = 'N'
				
				
				AND (
				a.nm_asset LIKE '%%'
				OR a.category LIKE '%%'
	        )
ERROR - 2025-10-27 09:07:10 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/modules/asset/models/Asset_model.php 218
ERROR - 2025-10-27 09:07:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:07:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:07:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:07:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:07:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:07:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:07:18 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.asset_generate.category' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT
				SUM(a.nilai_asset) AS total_aset,
				SUM(a.`value`) AS total_susut,
				SUM(b.sisa_nilai) AS total_sisa
			FROM
				asset a LEFT JOIN asset_nilai b ON a.kd_asset = b.kd_asset
			WHERE 1=1
				AND a.deleted = 'N'
				
				
				AND (
				a.nm_asset LIKE '%%'
				OR a.category LIKE '%%'
	        )
ERROR - 2025-10-27 09:07:18 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/modules/asset/models/Asset_model.php 218
ERROR - 2025-10-27 09:22:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:22:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:22:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:22:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:22:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:23:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:23:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:24:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:24:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:24:03 --> Severity: Warning --> require_once(vendor/autoload.php): failed to open stream: No such file or directory /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 4
ERROR - 2025-10-27 09:24:03 --> Severity: Compile Error --> require_once(): Failed opening required 'vendor/autoload.php' (include_path='.:/usr/local/lib/php') /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 4
ERROR - 2025-10-27 09:24:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:24:04 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:28:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:32:34 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:32:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:32:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:32:40 --> Query error: Table 'medika_db.tr_purchase_order' doesn't exist - Invalid query: 
		SELECT 
			a.*, 
			b.nm_lengkap as nm_create, 
			d.so_number,
			f.no_pr as no_pr_material,
			e.no_pr as no_pr_depart,
			h.nama as nm_supplier,
			IF(SUM(j.jumlahharga) IS NULL, 0, SUM(j.jumlahharga)) as harga_po
		FROM 
			tr_purchase_order as a 
			LEFT JOIN users b ON b.id_user = a.created_by 
			LEFT JOIN dt_trans_po c ON c.no_po = a.no_po 
			LEFT JOIN material_planning_base_on_produksi_detail d ON d.id = c.idpr AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN material_planning_base_on_produksi f ON f.so_number = d.so_number AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN rutin_non_planning_detail e ON e.id = c.idpr AND c.tipe = 'pr depart'
			LEFT JOIN rutin_non_planning_header g ON g.no_pengajuan = e.no_pengajuan
			LEFT JOIN new_supplier h ON h.kode_supplier = a.id_suplier
			LEFT JOIN dt_trans_po j ON j.no_po = a.no_po
		WHERE
			a.close_po IS NULL AND
			(SELECT COUNT(aa.id) FROM dt_trans_po aa WHERE aa.no_po = a.no_po) > 0
		GROUP BY a.no_po
		ORDER BY a.no_po DESC
	
ERROR - 2025-10-27 09:32:40 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 68
ERROR - 2025-10-27 09:32:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:32:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:34:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:34:29 --> Query error: Table 'medika_db.rutin_non_planning_detail' doesn't exist - Invalid query: 
		SELECT 
			a.*, 
			b.nm_lengkap as nm_create, 
			d.so_number,
			f.no_pr as no_pr_material,
			e.no_pr as no_pr_depart,
			h.nama as nm_supplier,
			IF(SUM(j.jumlahharga) IS NULL, 0, SUM(j.jumlahharga)) as harga_po
		FROM 
			tr_purchase_order as a 
			LEFT JOIN users b ON b.id_user = a.created_by 
			LEFT JOIN dt_trans_po c ON c.no_po = a.no_po 
			LEFT JOIN material_planning_base_on_produksi_detail d ON d.id = c.idpr AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN material_planning_base_on_produksi f ON f.so_number = d.so_number AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN rutin_non_planning_detail e ON e.id = c.idpr AND c.tipe = 'pr depart'
			LEFT JOIN rutin_non_planning_header g ON g.no_pengajuan = e.no_pengajuan
			LEFT JOIN new_supplier h ON h.kode_supplier = a.id_suplier
			LEFT JOIN dt_trans_po j ON j.no_po = a.no_po
		WHERE
			a.close_po IS NULL AND
			(SELECT COUNT(aa.id) FROM dt_trans_po aa WHERE aa.no_po = a.no_po) > 0
		GROUP BY a.no_po
		ORDER BY a.no_po DESC
	
ERROR - 2025-10-27 09:34:29 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 68
ERROR - 2025-10-27 09:34:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:34:29 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:40:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:40:18 --> Query error: Table 'medika_db.new_supplier' doesn't exist - Invalid query: 
		SELECT 
			a.*, 
			b.nm_lengkap as nm_create, 
			d.so_number,
			f.no_pr as no_pr_material,
			e.no_pr as no_pr_depart,
			h.nama as nm_supplier,
			IF(SUM(j.jumlahharga) IS NULL, 0, SUM(j.jumlahharga)) as harga_po
		FROM 
			tr_purchase_order as a 
			LEFT JOIN users b ON b.id_user = a.created_by 
			LEFT JOIN dt_trans_po c ON c.no_po = a.no_po 
			LEFT JOIN material_planning_base_on_produksi_detail d ON d.id = c.idpr AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN material_planning_base_on_produksi f ON f.so_number = d.so_number AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN new_supplier h ON h.kode_supplier = a.id_suplier
			LEFT JOIN dt_trans_po j ON j.no_po = a.no_po
		WHERE
			a.close_po IS NULL AND
			(SELECT COUNT(aa.id) FROM dt_trans_po aa WHERE aa.no_po = a.no_po) > 0
		GROUP BY a.no_po
		ORDER BY a.no_po DESC
	
ERROR - 2025-10-27 09:40:18 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 66
ERROR - 2025-10-27 09:40:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:40:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:41:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:41:10 --> Query error: Unknown column 'e.no_pr' in 'field list' - Invalid query: 
		SELECT 
			a.*, 
			b.nm_lengkap as nm_create, 
			d.so_number,
			f.no_pr as no_pr_material,
			e.no_pr as no_pr_depart,
			h.nama as nm_supplier,
			IF(SUM(j.jumlahharga) IS NULL, 0, SUM(j.jumlahharga)) as harga_po
		FROM 
			tr_purchase_order as a 
			LEFT JOIN users b ON b.id_user = a.created_by 
			LEFT JOIN dt_trans_po c ON c.no_po = a.no_po 
			LEFT JOIN material_planning_base_on_produksi_detail d ON d.id = c.idpr AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN material_planning_base_on_produksi f ON f.so_number = d.so_number AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN new_supplier h ON h.kode_supplier = a.id_suplier
			LEFT JOIN dt_trans_po j ON j.no_po = a.no_po
		WHERE
			a.close_po IS NULL AND
			(SELECT COUNT(aa.id) FROM dt_trans_po aa WHERE aa.no_po = a.no_po) > 0
		GROUP BY a.no_po
		ORDER BY a.no_po DESC
	
ERROR - 2025-10-27 09:41:10 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 66
ERROR - 2025-10-27 09:41:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:41:11 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:41:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:41:42 --> Query error: Unknown column 'e.no_pr' in 'field list' - Invalid query: 
		SELECT 
			a.*, 
			b.nm_lengkap as nm_create, 
			d.so_number,
			f.no_pr as no_pr_material,
			e.no_pr as no_pr_depart,
			h.nama as nm_supplier,
			IF(SUM(j.jumlahharga) IS NULL, 0, SUM(j.jumlahharga)) as harga_po
		FROM 
			tr_purchase_order as a 
			LEFT JOIN users b ON b.id_user = a.created_by 
			LEFT JOIN dt_trans_po c ON c.no_po = a.no_po 
			LEFT JOIN material_planning_base_on_produksi_detail d ON d.id = c.idpr AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN material_planning_base_on_produksi f ON f.so_number = d.so_number AND (c.tipe IS NULL OR c.tipe = '')
			LEFT JOIN new_supplier h ON h.kode_supplier = a.id_suplier
			LEFT JOIN dt_trans_po j ON j.no_po = a.no_po
		WHERE
			a.close_po IS NULL AND
			(SELECT COUNT(aa.id) FROM dt_trans_po aa WHERE aa.no_po = a.no_po) > 0
		GROUP BY a.no_po
		ORDER BY a.no_po DESC
	
ERROR - 2025-10-27 09:41:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:41:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:43:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:43:06 --> Severity: Warning --> Use of undefined constant DBCNL - assumed 'DBCNL' (this will throw an Error in a future version of PHP) /var/www/html/application/modules/purchase_order/views/index.php 96
ERROR - 2025-10-27 09:43:06 --> Query error: Table 'medika_db.rutin_non_planning_detail' doesn't exist - Invalid query: 
							SELECT
								b.no_pr as no_pr
							FROM
								material_planning_base_on_produksi_detail a
								JOIN material_planning_base_on_produksi b ON b.so_number = a.so_number
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND (aa.tipe IS NULL OR aa.tipe = ''))
							GROUP BY b.no_pr

							UNION ALL 

							SELECT
								b.no_pr as no_pr
							FROM
								rutin_non_planning_detail a
								JOIN rutin_non_planning_header b ON b.no_pengajuan = a.no_pengajuan
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND aa.tipe = 'pr depart')
							GROUP BY b.no_pr

							UNION ALL

							SELECT
								a.no_pr as no_pr
							FROM
								asset_planning a
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND aa.tipe = 'pr asset')
							GROUP BY a.no_pr

							UNION ALL

							SELECT
								a.id as no_pr
							FROM
								DBCNL.kons_tr_kasbon_project_header a 
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND aa.tipe = 'project consultant')
							GROUP BY a.id
						
ERROR - 2025-10-27 09:43:06 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/views/index.php 100
ERROR - 2025-10-27 09:43:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:43:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:44:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:44:35 --> Query error: Table 'medika_db.rutin_non_planning_detail' doesn't exist - Invalid query: 
							SELECT
								b.no_pr as no_pr
							FROM
								material_planning_base_on_produksi_detail a
								JOIN material_planning_base_on_produksi b ON b.so_number = a.so_number
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND (aa.tipe IS NULL OR aa.tipe = ''))
							GROUP BY b.no_pr

							UNION ALL 

							SELECT
								b.no_pr as no_pr
							FROM
								rutin_non_planning_detail a
								JOIN rutin_non_planning_header b ON b.no_pengajuan = a.no_pengajuan
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND aa.tipe = 'pr depart')
							GROUP BY b.no_pr

							UNION ALL

							SELECT
								a.no_pr as no_pr
							FROM
								asset_planning a
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND aa.tipe = 'pr asset')
							GROUP BY a.no_pr

							UNION ALL

							SELECT
								a.id as no_pr
							FROM
								db_consultant_new.kons_tr_kasbon_project_header a 
							WHERE
								a.id IN (SELECT aa.idpr FROM dt_trans_po aa WHERE aa.no_po = 'P2500003' AND aa.tipe = 'project consultant')
							GROUP BY a.id
						
ERROR - 2025-10-27 09:44:35 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/views/index.php 100
ERROR - 2025-10-27 09:44:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:44:35 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:45:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:45:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:45:17 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: 
			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				a.idmaterial as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				(b.qty_stock - b.qty_booking) AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc,
				e.propose_purchase as propose_purchase,
				g.code as packing_unit,
				h.code as packing_unit2,
				IF(i.code IS NOT NULL, i.code, j.code) as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN warehouse_stock b ON b.id_material = a.idmaterial
				LEFT JOIN new_inventory_4 c ON c.code_lv4 = a.idmaterial OR c.id = a.idmaterial
				LEFT JOIN material_planning_base_on_produksi_detail e ON e.id = a.idpr
				LEFT JOIN accessories f ON f.id = a.idmaterial
				LEFT JOIN ms_satuan g ON g.id = c.id_unit_packing
				LEFT JOIN ms_satuan h ON h.id = f.id_unit_gudang
				LEFT JOIN ms_satuan i ON i.id = c.id_unit
				LEFT JOIN ms_satuan j ON j.id = f.id_unit
			WHERE
				a.no_po IN ('P2500003') AND
				(a.tipe IS NULL OR a.tipe = '')
			GROUP BY id

			UNION ALL

			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				IF(f.code IS NULL, 'Pcs', f.code) as packing_unit,
				'' as packing_unit2,
				IF(f.code IS NULL, 'Pcs', f.code) as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN rutin_non_planning_detail e ON e.id = a.idpr
				LEFT JOIN ms_satuan f ON f.id = e.satuan
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'pr depart'

			UNION ALL

			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				'Pcs' as packing_unit,
				'' as packing_unit2,
				'Pcs' as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN asset_planning e ON e.id = a.idpr
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'pr asset'

			UNION ALL

			SELECT
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as id_material,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock,
				'' as code,
				'' as code1,
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				'Item' as packing_unit,
				'' as packing_unit2,
				'Item' as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN db_consultant_new.kons_tr_kasbon_project_header e ON e.id = a.idpr
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'project consultant'
			GROUP BY id
		
ERROR - 2025-10-27 09:45:17 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3355
ERROR - 2025-10-27 09:45:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:45:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:46:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:46:01 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: 
			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				a.idmaterial as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				(b.qty_stock - b.qty_booking) AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc,
				e.propose_purchase as propose_purchase,
				g.code as packing_unit,
				h.code as packing_unit2,
				IF(i.code IS NOT NULL, i.code, j.code) as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN warehouse_stock b ON b.id_material = a.idmaterial
				LEFT JOIN new_inventory_4 c ON c.code_lv4 = a.idmaterial OR c.id = a.idmaterial
				LEFT JOIN material_planning_base_on_produksi_detail e ON e.id = a.idpr
				LEFT JOIN accessories f ON f.id = a.idmaterial
				LEFT JOIN ms_satuan g ON g.id = c.id_unit_packing
				LEFT JOIN ms_satuan h ON h.id = f.id_unit_gudang
				LEFT JOIN ms_satuan i ON i.id = c.id_unit
				LEFT JOIN ms_satuan j ON j.id = f.id_unit
			WHERE
				a.no_po IN ('P2500003') AND
				(a.tipe IS NULL OR a.tipe = '')
			GROUP BY id

			UNION ALL

			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				'Pcs' as packing_unit,
				'' as packing_unit2,
				'Pcs' as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN asset_planning e ON e.id = a.idpr
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'pr asset'

			UNION ALL

			SELECT
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as id_material,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock,
				'' as code,
				'' as code1,
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				'Item' as packing_unit,
				'' as packing_unit2,
				'Item' as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN db_consultant_new.kons_tr_kasbon_project_header e ON e.id = a.idpr
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'project consultant'
			GROUP BY id
		
ERROR - 2025-10-27 09:46:01 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3320
ERROR - 2025-10-27 09:46:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:46:01 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:47:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:47:28 --> Query error: Unknown column 'i.code' in 'field list' - Invalid query: 
			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				a.idmaterial as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				(b.qty_stock - b.qty_booking) AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc,
				e.propose_purchase as propose_purchase,
				'' as packing_unit,
				h.code as packing_unit2,
				IF(i.code IS NOT NULL, i.code, j.code) as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN warehouse_stock b ON b.id_material = a.idmaterial
				LEFT JOIN material_planning_base_on_produksi_detail e ON e.id = a.idpr
				LEFT JOIN accessories f ON f.id = a.idmaterial
				LEFT JOIN ms_satuan h ON h.id = f.id_unit_gudang
				LEFT JOIN ms_satuan j ON j.id = f.id_unit
			WHERE
				a.no_po IN ('P2500003') AND
				(a.tipe IS NULL OR a.tipe = '')
			GROUP BY id

			UNION ALL

			SELECT 
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as idmaterial,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock, 
				a.kode_barang as code, 
				'' as code1, 
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				'Pcs' as packing_unit,
				'' as packing_unit2,
				'Pcs' as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN asset_planning e ON e.id = a.idpr
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'pr asset'

			UNION ALL

			SELECT
				a.id as id,
				a.idpr as idpr,
				a.no_po as no_po,
				'' as id_material,
				a.qty as qty,
				a.hargasatuan as hargasatuan,
				a.jumlahharga as jumlahharga,
				a.kode_barang as kode_barang,
				a.ppn as ppn,
				a.ppn_persen as ppn_persen,
				a.harga_total as harga_total,
				a.tipe as tipe_pr,
				a.keterangan as keterangan,
				'0' AS avl_stock,
				'' as code,
				'' as code1,
				a.namamaterial as nm_material, 
				'' as nm_material1,
				a.persen_disc as persen_disc,
				a.nilai_disc as nilai_disc, 
				a.qty as propose_purchase,
				'Item' as packing_unit,
				'' as packing_unit2,
				'Item' as unit_measure
			FROM
				dt_trans_po a
				LEFT JOIN db_consultant_new.kons_tr_kasbon_project_header e ON e.id = a.idpr
			WHERE
				a.no_po IN ('P2500003') AND 
				a.tipe = 'project consultant'
			GROUP BY id
		
ERROR - 2025-10-27 09:47:28 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3317
ERROR - 2025-10-27 09:47:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:47:29 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:47:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:47:43 --> Query error: Table 'medika_db.ms_karyawan' doesn't exist - Invalid query: SELECT *
FROM `ms_karyawan`
WHERE `deleted_by` IS NULL
ERROR - 2025-10-27 09:47:43 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3331
ERROR - 2025-10-27 09:47:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:47:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:48:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:48:06 --> Query error: Table 'medika_db.ms_karyawan' doesn't exist - Invalid query: SELECT *
FROM `ms_karyawan`
WHERE `deleted_by` IS NULL
ERROR - 2025-10-27 09:48:06 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3333
ERROR - 2025-10-27 09:48:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:48:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:48:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:48:27 --> Query error: Table 'medika_db.ms_karyawan' doesn't exist - Invalid query: SELECT *
FROM `ms_karyawan`
WHERE `deleted_by` IS NULL
ERROR - 2025-10-27 09:48:27 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3331
ERROR - 2025-10-27 09:48:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:48:27 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:49:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:49:59 --> Query error: Table 'medika_db.mata_uang' doesn't exist - Invalid query: SELECT *
FROM `mata_uang`
WHERE `deleted` IS NULL
ERROR - 2025-10-27 09:49:59 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3332
ERROR - 2025-10-27 09:49:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:49:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:51:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:51:47 --> Query error: Table 'medika_db.list_help' doesn't exist - Invalid query: SELECT *
FROM `list_help`
WHERE `group_by` = 'top'
AND `sts` = 'Y'
ERROR - 2025-10-27 09:51:47 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3341
ERROR - 2025-10-27 09:51:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:51:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 09:52:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:52:32 --> Query error: Table 'medika_db.tr_top_po' doesn't exist - Invalid query: SELECT *
FROM `tr_top_po`
WHERE `no_po` = 'P2500003'
ERROR - 2025-10-27 09:52:32 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3342
ERROR - 2025-10-27 09:52:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 09:52:32 --> 404 Page Not Found: /index
ERROR - 2025-10-27 10:56:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 10:56:51 --> Query error: Table 'medika_db.tr_top_po' doesn't exist - Invalid query: SELECT *
FROM `tr_top_po`
WHERE `no_po` = 'P2500003'
ERROR - 2025-10-27 10:56:51 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3342
ERROR - 2025-10-27 10:58:56 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 10:58:56 --> Query error: Table 'medika_db.tr_top_po' doesn't exist - Invalid query: SELECT *
FROM `tr_top_po`
WHERE `no_po` = 'P2500003'
ERROR - 2025-10-27 10:58:57 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/purchase_order/controllers/Purchase_order.php 3342
ERROR - 2025-10-27 10:58:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 10:58:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 10:59:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 10:59:40 --> Severity: Notice --> Undefined index: supplier /var/www/html/application/modules/purchase_order/views/view.php 27
ERROR - 2025-10-27 10:59:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/modules/purchase_order/views/view.php 27
ERROR - 2025-10-27 10:59:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
