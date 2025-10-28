<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

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
ERROR - 2025-10-27 04:16:51 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:16:51 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:16:56 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:16:56 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:16:56 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:16:56 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:16:56 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:16:56 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:16:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:16:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:01 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:01 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:01 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:01 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:02 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:02 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:28 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:28 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:28 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:28 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:28 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:29 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:29 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:43 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:43 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:43 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:43 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:43 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:44 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:54 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:55 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:55 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:55 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:55 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:55 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:55 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:56 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:56 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:17:57 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:17:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 04:18:03 --> $config['composer_autoload'] is set to TRUE but D:\LOCAL_SERVER\medika\application\vendor/autoload.php was not found.
ERROR - 2025-10-27 04:18:03 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:13:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:13:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:14:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:14:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:14:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:14 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:21 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:21 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:21 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:22 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:22 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:22 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:22 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:22 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:36 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:15:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:15:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:16:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:16:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:17:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:17:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:17:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:17:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:17:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:17:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:49 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:22:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:22:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:43 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:50 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:23:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:23:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:14 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:14 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:24:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:24:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:12 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:41 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:25:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:25:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:26:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:26:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:27:00 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:27:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:27:00 --> 404 Page Not Found: /index
ERROR - 2025-10-27 14:28:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:29:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:29:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:29:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:29:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:29:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:30:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:31:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:32:56 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:33:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:33:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:33:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:33:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:35:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:46:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:47:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:49:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:49:51 --> Severity: Notice --> Undefined variable: datgroupmenu /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:49:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:49:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:50:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:50:17 --> Query error: Duplicate entry '454' for key 'permissions.PRIMARY' - Invalid query: INSERT INTO `permissions` (`created_by`, `created_on`, `id_permission`, `ket`, `nm_menu`, `nm_permission`) VALUES ('1','2025-10-27 14:50:17',454,'View','Warehouse','Warehouse.View'), ('1','2025-10-27 14:50:17',455,'Add','Warehouse','Warehouse.Add'), ('1','2025-10-27 14:50:17',456,'Manage','Warehouse','Warehouse.Manage'), ('1','2025-10-27 14:50:17',457,'Delete','Warehouse','Warehouse.Delete')
ERROR - 2025-10-27 14:50:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:50:17 --> Severity: Notice --> Undefined variable: datgroupmenu /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:50:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:02 --> Query error: Duplicate entry '454' for key 'permissions.PRIMARY' - Invalid query: INSERT INTO `permissions` (`created_by`, `created_on`, `id_permission`, `ket`, `nm_menu`, `nm_permission`) VALUES ('1','2025-10-27 14:53:02',454,'View','Warehouse Stock','Warehouse_Stock.View'), ('1','2025-10-27 14:53:02',455,'Add','Warehouse Stock','Warehouse_Stock.Add'), ('1','2025-10-27 14:53:02',456,'Manage','Warehouse Stock','Warehouse_Stock.Manage'), ('1','2025-10-27 14:53:02',457,'Delete','Warehouse Stock','Warehouse_Stock.Delete')
ERROR - 2025-10-27 14:53:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:02 --> Severity: Notice --> Undefined variable: datgroupmenu /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:53:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:53:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:47 --> Query error: Duplicate entry '454' for key 'permissions.PRIMARY' - Invalid query: INSERT INTO `permissions` (`created_by`, `created_on`, `id_permission`, `ket`, `nm_menu`, `nm_permission`) VALUES ('1','2025-10-27 14:53:47',454,'View','Outgoing Consumable','Outgoing_Consumable.View'), ('1','2025-10-27 14:53:47',455,'Add','Outgoing Consumable','Outgoing_Consumable.Add'), ('1','2025-10-27 14:53:47',456,'Manage','Outgoing Consumable','Outgoing_Consumable.Manage'), ('1','2025-10-27 14:53:47',457,'Delete','Outgoing Consumable','Outgoing_Consumable.Delete')
ERROR - 2025-10-27 14:53:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:47 --> Severity: Notice --> Undefined variable: datgroupmenu /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:53:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 14:53:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:53:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:55:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:55:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:56:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:56:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:56:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:56:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:57:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 14:57:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 15:06:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 15:06:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:47 --> Severity: Notice --> Undefined variable: datgroupmenu /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 16:13:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 16:13:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:13:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:21:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:21:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:21:18 --> Query error: Duplicate entry '454' for key 'permissions.PRIMARY' - Invalid query: INSERT INTO `permissions` (`created_by`, `created_on`, `id_permission`, `ket`, `nm_menu`, `nm_permission`) VALUES ('1','2025-10-27 16:21:18',454,'View','Kelompok Pemeriksaan','Kelompok_Pemeriksaan.View'), ('1','2025-10-27 16:21:18',455,'Add','Kelompok Pemeriksaan','Kelompok_Pemeriksaan.Add'), ('1','2025-10-27 16:21:18',456,'Manage','Kelompok Pemeriksaan','Kelompok_Pemeriksaan.Manage'), ('1','2025-10-27 16:21:18',457,'Delete','Kelompok Pemeriksaan','Kelompok_Pemeriksaan.Delete')
ERROR - 2025-10-27 16:21:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:21:18 --> Severity: Notice --> Undefined variable: datgroupmenu /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 16:21:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/application/modules/menus/views/menus_form.php 73
ERROR - 2025-10-27 16:21:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:21:24 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:21:24 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:24:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:24:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:26:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:26:59 --> 404 Page Not Found: ../modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan/index
ERROR - 2025-10-27 16:27:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:27:08 --> Severity: error --> Exception: Class 'Kelompok_pemeriksaan_model' not found /var/www/html/application/third_party/MX/Loader.php 213
ERROR - 2025-10-27 16:27:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:27:08 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:27:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:27:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:27:46 --> Severity: Notice --> Undefined variable: category /var/www/html/application/modules/kelompok_pemeriksaan/views/index.php 28
ERROR - 2025-10-27 16:27:46 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/modules/kelompok_pemeriksaan/views/index.php 28
ERROR - 2025-10-27 16:27:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:27:47 --> 404 Page Not Found: ../modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan/data_side_accessories
ERROR - 2025-10-27 16:28:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:28:08 --> Severity: Notice --> Undefined variable: category /var/www/html/application/modules/kelompok_pemeriksaan/views/index.php 27
ERROR - 2025-10-27 16:28:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/modules/kelompok_pemeriksaan/views/index.php 27
ERROR - 2025-10-27 16:28:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:28:08 --> 404 Page Not Found: ../modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan/data_side_accessories
ERROR - 2025-10-27 16:28:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:28:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:28:14 --> 404 Page Not Found: ../modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan/data_side_accessories
ERROR - 2025-10-27 16:28:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:28:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:28:19 --> 404 Page Not Found: ../modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan/data_side_accessories
ERROR - 2025-10-27 16:39:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:39:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:39:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:40:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:40:22 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:40:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:40:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:40:25 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:40:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:41:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:41:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:41:14 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:41:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:41:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:41:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:41:40 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:41:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:43:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:43:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:43:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:43:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:43:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:43:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:51:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:07 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:51:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:07 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:51:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:07 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:51:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:07 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:51:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:07 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:51:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:51:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:24 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:26 --> Severity: Notice --> Undefined property: CI::$view /var/www/html/application/third_party/MX/Controller.php 59
ERROR - 2025-10-27 16:56:26 --> Severity: error --> Exception: Call to a member function load() on null /var/www/html/application/modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan.php 46
ERROR - 2025-10-27 16:56:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:29 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:30 --> Severity: Notice --> Undefined property: CI::$view /var/www/html/application/third_party/MX/Controller.php 59
ERROR - 2025-10-27 16:56:30 --> Severity: error --> Exception: Call to a member function load() on null /var/www/html/application/modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan.php 46
ERROR - 2025-10-27 16:56:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:56:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:56:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:06 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:27 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:27 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:27 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:27 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:27 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:35 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:35 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:36 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:57:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:57:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 16:58:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 16:58:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:03:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:03:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:03:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:57 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:03:58 --> Severity: Notice --> Undefined variable: list_kategori /var/www/html/application/modules/kelompok_pemeriksaan/views/add_kelompok_pemeriksaan.php 7
ERROR - 2025-10-27 17:03:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/modules/kelompok_pemeriksaan/views/add_kelompok_pemeriksaan.php 7
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:04:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:04:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:04:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:44 --> Severity: error --> Exception: syntax error, unexpected '}' /var/www/html/application/modules/kelompok_pemeriksaan/controllers/Kelompok_pemeriksaan.php 51
ERROR - 2025-10-27 17:05:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:05:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:05:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:06:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:06:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:06:10 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:06:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:07:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:07:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:07:51 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:07:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:07:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:07:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:07:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:04 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:08:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:04 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:08:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:04 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:08:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:04 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:08:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:08:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:08:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:08:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:03 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:03 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:10:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:10:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:52 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:11:53 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:11:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:30 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:58 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:12:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:12:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:04 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:13:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:13:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:13:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:13:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:13:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 17:13:05 --> 404 Page Not Found: /index
ERROR - 2025-10-27 17:13:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:13:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:13:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:13:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:13:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:32:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:32:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:32:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:32:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:33:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:36:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:36:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:36:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:36:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 20:37:39 --> 404 Page Not Found: /index
ERROR - 2025-10-27 20:37:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:19:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:23:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:29:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:29:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:29:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:29:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:29:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:29:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:47 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:48 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:39:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:39:53 --> Query error: Table 'medika_db.tr_kategorilab' doesn't exist - Invalid query: SELECT *
FROM `tr_kategorilab`
WHERE `id_kategori` = 'KL2510001'
ERROR - 2025-10-27 21:39:53 --> Severity: error --> Exception: Call to a member function row() on bool /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 30
ERROR - 2025-10-27 21:40:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:19 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:40:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:19 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:40:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:40:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:40:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 21:40:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 21:40:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:06:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:15 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:16 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:16 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 72
ERROR - 2025-10-27 22:09:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:44 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:09:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 72
ERROR - 2025-10-27 22:14:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:25 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:25 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:26 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:26 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 72
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:38 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:46 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:14:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:14:59 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 72
ERROR - 2025-10-27 22:15:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:08 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:08 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:08 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:08 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:08 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:09 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:18 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:19 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 72
ERROR - 2025-10-27 22:15:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:37 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/application/modules/kelompok_pemeriksaan/models/Kelompok_pemeriksaan_model.php 72
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:15:45 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:15:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:16:02 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:16:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:19 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:20 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:28 --> 404 Page Not Found: /index
ERROR - 2025-10-27 22:20:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:34 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:20:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:21:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:23:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:23:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:23:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:23:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:23:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:23:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:24:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:24:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:24:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:24:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:31:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:31:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:31:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:31:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-27 22:33:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
<<<<<<< HEAD
<<<<<<< HEAD
ERROR - 2025-10-27 22:33:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
=======
ERROR - 2025-10-27 22:33:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
>>>>>>> dev_alief
=======
ERROR - 2025-10-27 22:33:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
>>>>>>> dev_sam
