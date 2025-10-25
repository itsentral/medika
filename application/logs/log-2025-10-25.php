<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-10-25 09:31:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:31:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:31:50 --> Severity: Notice --> Undefined variable: nama_program /var/www/html/application/modules/users/views/login_animate.php 6
ERROR - 2025-10-25 09:31:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:31:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:31:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:31:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:33:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:33:24 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:33:24 --> Severity: error --> Exception: Unable to locate the model you have specified: Consumable_category_model /var/www/html/system/core/Loader.php 349
ERROR - 2025-10-25 09:34:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:01 --> Severity: Notice --> Undefined property: CI::$accessories_category_model /var/www/html/application/third_party/MX/Controller.php 59
ERROR - 2025-10-25 09:34:01 --> Severity: error --> Exception: Call to a member function get_data() on null /var/www/html/application/modules/consumable_category/controllers/Consumable_category.php 43
ERROR - 2025-10-25 09:34:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:01 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:34:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:17 --> Severity: error --> Exception: Call to undefined function history() /var/www/html/application/modules/consumable_category/controllers/Consumable_category.php 49
ERROR - 2025-10-25 09:34:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:17 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:34:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:34:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:35:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:36:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:36:26 --> Severity: Notice --> Undefined variable: nama_program /var/www/html/application/modules/users/views/login_animate.php 6
ERROR - 2025-10-25 09:37:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:37:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:37:08 --> Severity: Warning --> require_once(vendor/autoload.php): failed to open stream: No such file or directory /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 4
ERROR - 2025-10-25 09:37:08 --> Severity: Compile Error --> require_once(): Failed opening required 'vendor/autoload.php' (include_path='.:/usr/local/lib/php') /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 4
ERROR - 2025-10-25 09:40:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:40:28 --> Query error: Table 'medika_db.material_planning_base_on_produksi' doesn't exist - Invalid query: SELECT `a`.*, `b`.`nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `customer` `b` ON `b`.`id_customer` = `a`.`id_customer`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:40:28 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 48
ERROR - 2025-10-25 09:41:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:41:03 --> Query error: Table 'medika_db.material_planning_base_on_produksi' doesn't exist - Invalid query: SELECT `a`.*, `b`.`nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `customer` `b` ON `b`.`id_customer` = `a`.`id_customer`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:41:03 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 48
ERROR - 2025-10-25 09:41:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:41:03 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:48:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:25 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.a.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `a`.*, `b`.`nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `customer` `b` ON `b`.`id_customer` = `a`.`id_customer`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:48:25 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 48
ERROR - 2025-10-25 09:48:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.a.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `a`.*, "" as `nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:48:58 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 47
ERROR - 2025-10-25 09:48:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:58 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:48:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:59 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.a.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `a`.*, "" as `nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:48:59 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 47
ERROR - 2025-10-25 09:48:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:59 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:48:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:59 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.a.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `a`.*, "" as `nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:48:59 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 47
ERROR - 2025-10-25 09:48:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:48:59 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:49:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:49:19 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'medika_db.a.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `a`.*, "" as `nm_customer`, `e`.`nm_lengkap` as `request_by`, DATE_FORMAT(a.created_date, "%d %M %Y") as request_date
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `material_planning_base_on_produksi_detail` `c` ON `c`.`so_number` = `a`.`so_number`
LEFT JOIN `accessories` `d` ON `d`.`id` = `c`.`id_material`
LEFT JOIN `users` `e` ON `e`.`id_user` = `a`.`created_by`
WHERE `a`.`category` = 'pr stok'
AND `a`.`booking_date` IS NOT NULL
AND `a`.`close_pr` IS NULL
GROUP BY `a`.`so_number`
ORDER BY `a`.`created_date` DESC
ERROR - 2025-10-25 09:49:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:49:19 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:52:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:52:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:52:53 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:53:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:53:35 --> Severity: error --> Exception: Call to undefined function get_list_inventory_lv1() /var/www/html/application/modules/request_pr_stok/views/index.php 30
ERROR - 2025-10-25 09:53:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:53:35 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:53:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:53:40 --> Severity: error --> Exception: Call to undefined function get_list_inventory_lv1() /var/www/html/application/modules/request_pr_stok/views/index.php 30
ERROR - 2025-10-25 09:53:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:53:40 --> Severity: error --> Exception: Call to undefined function get_list_inventory_lv1() /var/www/html/application/modules/request_pr_stok/views/index.php 30
ERROR - 2025-10-25 09:53:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:53:40 --> 404 Page Not Found: /index
ERROR - 2025-10-25 09:54:21 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:54:57 --> Severity: error --> Exception: Call to undefined function get_kebutuhanPerMonth() /var/www/html/application/modules/request_pr_stok/models/Request_pr_stok_model.php 412
ERROR - 2025-10-25 09:54:57 --> Query error: Table 'medika_db.budget_rutin_detail' doesn't exist - Invalid query: SELECT `a`.`kebutuhan_month`, `a`.`price_reference`
FROM `budget_rutin_detail` `a`
JOIN `accessories` `b` ON `b`.`id` = `a`.`id_barang`
WHERE `b`.`id_category` = '3'
ERROR - 2025-10-25 09:54:57 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 723
ERROR - 2025-10-25 09:55:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:55:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:55:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:55:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:55:06 --> Severity: error --> Exception: Call to undefined function get_kebutuhanPerMonth() /var/www/html/application/modules/request_pr_stok/models/Request_pr_stok_model.php 412
ERROR - 2025-10-25 09:55:07 --> Query error: Table 'medika_db.budget_rutin_detail' doesn't exist - Invalid query: SELECT `a`.`kebutuhan_month`, `a`.`price_reference`
FROM `budget_rutin_detail` `a`
JOIN `accessories` `b` ON `b`.`id` = `a`.`id_barang`
WHERE `b`.`id_category` = '3'
ERROR - 2025-10-25 09:55:07 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 723
ERROR - 2025-10-25 09:56:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:56:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 09:56:44 --> Query error: Table 'medika_db.budget_rutin_detail' doesn't exist - Invalid query: SELECT SUM(kebutuhan_month) AS sum_keb, `id_barang`
FROM `budget_rutin_detail`
GROUP BY `id_barang`
ERROR - 2025-10-25 09:56:44 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 541
ERROR - 2025-10-25 09:56:44 --> Query error: Table 'medika_db.budget_rutin_detail' doesn't exist - Invalid query: SELECT `a`.`kebutuhan_month`, `a`.`price_reference`
FROM `budget_rutin_detail` `a`
JOIN `accessories` `b` ON `b`.`id` = `a`.`id_barang`
WHERE `b`.`id_category` = '3'
ERROR - 2025-10-25 09:56:44 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 723
ERROR - 2025-10-25 10:01:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:01:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:01:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:01:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:01:54 --> Query error: Table 'medika_db.warehouse_stock' doesn't exist - Invalid query: SELECT `a`.`id_material`, SUM(a.qty_stock) AS qty_stock, `b`.`konversi`
FROM `warehouse_stock` `a`
JOIN `accessories` `b` ON `a`.`id_material`=`b`.`id`
WHERE `a`.`id_gudang` = 1
GROUP BY `a`.`id_material`
ERROR - 2025-10-25 10:01:54 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 563
ERROR - 2025-10-25 10:03:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:47 --> Query error: Table 'medika_db.so_internal' doesn't exist - Invalid query: SELECT `a`.*, `b`.`due_date`, `c`.`nm_customer`
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `so_internal` `b` ON `a`.`so_number`=`b`.`so_number`
LEFT JOIN `customer` `c` ON `a`.`id_customer`=`c`.`id_customer`
WHERE `a`.`so_number` = 'P250800003'
ERROR - 2025-10-25 10:03:47 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 294
ERROR - 2025-10-25 10:03:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:03:58 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:18 --> Severity: error --> Exception: Call to undefined function generateNoPR() /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 204
ERROR - 2025-10-25 10:04:24 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:04:26 --> Severity: error --> Exception: Call to undefined function generateNoPR() /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 204
ERROR - 2025-10-25 10:05:03 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:05:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:05:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:05:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:05:08 --> Query error: Table 'medika_db.so_internal' doesn't exist - Invalid query: SELECT `a`.*, `b`.`due_date`, `c`.`nm_customer`
FROM `material_planning_base_on_produksi` `a`
LEFT JOIN `so_internal` `b` ON `a`.`so_number`=`b`.`so_number`
LEFT JOIN `customer` `c` ON `a`.`id_customer`=`c`.`id_customer`
WHERE `a`.`so_number` = 'P251000001'
ERROR - 2025-10-25 10:05:08 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 294
ERROR - 2025-10-25 10:05:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:05:53 --> Severity: error --> Exception: Call to undefined function get_inventory_lv4() /var/www/html/application/modules/request_pr_stok/controllers/Request_pr_stok.php 309
ERROR - 2025-10-25 10:05:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:05:53 --> 404 Page Not Found: /index
ERROR - 2025-10-25 10:06:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:06:55 --> Severity: Compile Error --> Cannot redeclare getStokBarangAll() (previously declared in /var/www/html/application/helpers/app_helper.php:552) /var/www/html/application/helpers/app_helper.php 666
ERROR - 2025-10-25 10:06:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:06:55 --> 404 Page Not Found: /index
ERROR - 2025-10-25 10:07:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:07:05 --> Severity: Compile Error --> Cannot redeclare getStokBarangAll() (previously declared in /var/www/html/application/helpers/app_helper.php:552) /var/www/html/application/helpers/app_helper.php 666
ERROR - 2025-10-25 10:07:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:07:06 --> 404 Page Not Found: /index
ERROR - 2025-10-25 10:07:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:07:23 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: SELECT *
FROM `new_inventory_4`
WHERE `deleted_date` IS NULL
ERROR - 2025-10-25 10:07:23 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 568
ERROR - 2025-10-25 10:07:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:07:23 --> 404 Page Not Found: /index
ERROR - 2025-10-25 10:07:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:08:00 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: SELECT *
FROM `new_inventory_4`
WHERE `deleted_date` IS NULL
ERROR - 2025-10-25 10:08:00 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 568
ERROR - 2025-10-25 10:08:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:08:00 --> 404 Page Not Found: /index
ERROR - 2025-10-25 10:08:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:08:19 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: SELECT `a`.`id_material`, `a`.`qty_stock`, `a`.`qty_booking`, `b`.`konversi`
FROM `warehouse_stock` `a`
JOIN `new_inventory_4` `b` ON `a`.`id_material`=`b`.`code_lv4`
WHERE `a`.`id_gudang` = 1
ERROR - 2025-10-25 10:08:19 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 598
ERROR - 2025-10-25 10:08:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:08:19 --> 404 Page Not Found: /index
ERROR - 2025-10-25 10:08:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:09:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:09:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:09:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:17:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:17:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:28:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:28:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:28:19 --> Query error: Table 'medika_db.warehouse_adjustment' doesn't exist - Invalid query: SELECT
              (@row:=@row+1) AS nomor,
              a.kode_trans,
              a.pic,
              a.id_dept,
              a.tanggal,
              a.jumlah_mat_packing AS qty_packing,
              a.jumlah_mat AS qty_unit,
              a.created_by,
              a.created_date,
              c.nm_gudang AS nama_costcenter,
              d.nm_gudang,
              a.checked AS sts_confirm
            FROM
              warehouse_adjustment a
              LEFT JOIN warehouse c ON a.id_gudang_ke=c.id
              LEFT JOIN warehouse d ON a.id_gudang_dari=d.id,
              (SELECT @row:=0) r
            WHERE a.deleted_date IS NULL AND a.category='outgoing stok' AND (
              a.kode_trans LIKE '%%'
              OR d.nm_gudang LIKE '%%'
              OR c.nm_gudang LIKE '%%'
            )
              GROUP BY a.kode_trans
            
ERROR - 2025-10-25 10:28:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /var/www/html/application/modules/outgoing_stok_atk/models/Outgoing_stok_atk_model.php 257
ERROR - 2025-10-25 10:28:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:28:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:28:27 --> Query error: Table 'medika_db.warehouse_adjustment' doesn't exist - Invalid query: SELECT
              (@row:=@row+1) AS nomor,
              a.kode_trans,
              a.pic,
              a.id_dept,
              a.tanggal,
              a.jumlah_mat_packing AS qty_packing,
              a.jumlah_mat AS qty_unit,
              a.created_by,
              a.created_date,
              c.nm_gudang AS nama_costcenter,
              d.nm_gudang,
              a.checked AS sts_confirm
            FROM
              warehouse_adjustment a
              LEFT JOIN warehouse c ON a.id_gudang_ke=c.id
              LEFT JOIN warehouse d ON a.id_gudang_dari=d.id,
              (SELECT @row:=0) r
            WHERE a.deleted_date IS NULL AND a.category='outgoing stok' AND (
              a.kode_trans LIKE '%%'
              OR d.nm_gudang LIKE '%%'
              OR c.nm_gudang LIKE '%%'
            )
              GROUP BY a.kode_trans
            
ERROR - 2025-10-25 10:28:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /var/www/html/application/modules/outgoing_stok_atk/models/Outgoing_stok_atk_model.php 257
ERROR - 2025-10-25 10:33:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:33:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:33:28 --> Severity: error --> Exception: Call to undefined function get_list_user() /var/www/html/application/modules/outgoing_stok_atk/models/Outgoing_stok_atk_model.php 156
ERROR - 2025-10-25 10:33:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:33:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:33:52 --> Severity: error --> Exception: Call to undefined function getTotalBeratSPKSOInternal() /var/www/html/application/modules/outgoing_stok_atk/models/Outgoing_stok_atk_model.php 157
ERROR - 2025-10-25 10:34:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:34:05 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:34:05 --> Query error: Table 'medika_db.so_internal_spk_material' doesn't exist - Invalid query: SELECT `kode_det`, SUM(weight) AS weight
FROM `so_internal_spk_material`
GROUP BY `kode_det`
ERROR - 2025-10-25 10:34:05 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 1632
ERROR - 2025-10-25 10:34:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:34:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:35:56 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:35:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:37:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:37:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:38:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:38:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:38:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:38:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:38:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:38:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:40:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:40:57 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: SELECT *
FROM `new_inventory_4`
WHERE `deleted_date` IS NULL
ERROR - 2025-10-25 10:40:57 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 568
ERROR - 2025-10-25 10:41:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:41:10 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:42:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 10:42:17 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:19:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:19:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:19:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:20:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:20:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:20:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:20:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse`' at line 2 - Invalid query: SELECT COUNT(*) AS `numrows`
LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse` `d` ON `d`.`id` = `a`.`id_gudang_dari`
WHERE warehouse_adjustment a
AND `a`.`deleted_date` IS NULL
AND `a`.`category` = 'outgoing stok'
ERROR - 2025-10-25 11:20:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /var/www/html/system/database/DB_query_builder.php 1430
ERROR - 2025-10-25 11:21:13 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:21:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:21:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse`' at line 2 - Invalid query: SELECT COUNT(*) AS `numrows`
LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse` `d` ON `d`.`id` = `a`.`id_gudang_dari`
WHERE warehouse_adjustment a
AND `a`.`deleted_date` IS NULL
AND `a`.`category` = 'outgoing stok'
ERROR - 2025-10-25 11:21:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /var/www/html/system/database/DB_query_builder.php 1430
ERROR - 2025-10-25 11:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:22:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:22:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse`' at line 2 - Invalid query: SELECT COUNT(*) AS `numrows`
LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse` `d` ON `d`.`id` = `a`.`id_gudang_dari`
WHERE warehouse_adjustment a
AND `a`.`deleted_date` IS NULL
AND `a`.`category` = 'outgoing stok'
ERROR - 2025-10-25 11:22:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /var/www/html/system/database/DB_query_builder.php 1430
ERROR - 2025-10-25 11:23:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:23:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse`' at line 2 - Invalid query: SELECT `a`.`kode_trans`, `a`.`pic`, `a`.`id_dept`, `a`.`tanggal`, `a`.`jumlah_mat_packing` as `qty_packing`, `a`.`jumlah_mat` as `qty_unit`, `a`.`created_by`, `a`.`created_date`, `c`.`nm_gudang` as `nama_costcenter`, `d`.`nm_gudang`, `a`.`checked` as `sts_confirm`
LEFT JOIN `warehouse` `c` ON `c`.`id` = `a`.`id_gudang_ke`
LEFT JOIN `warehouse` `d` ON `d`.`id` = `a`.`id_gudang_dari`
WHERE warehouse_adjustment a
AND `a`.`deleted_date` IS NULL
AND `a`.`category` = 'outgoing stok'
GROUP BY `a`.`kode_trans`
 LIMIT 10
ERROR - 2025-10-25 11:23:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:23:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:25:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:25:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:32:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:32:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:33:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:33:16 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:34:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:34:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:34:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:34:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:34:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:34:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:40:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:40:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:42:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:42:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:45:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:45:25 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:48:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:48:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:48:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:48:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:08 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:49:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:50:27 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:50:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:51:19 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:51:20 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:51:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 11:51:51 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:02:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:02:33 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:04:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:04:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:05:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:06:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:06:04 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:06:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:06:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:06 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:07:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:08:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:08:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:08:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:08:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:09:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:09:07 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:09:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:09:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:09:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:09:45 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:12:52 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:12:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:13:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:13:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:15:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:15:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:15:47 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:15:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:16:30 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:16:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:34 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:34 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:43 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:44 --> Severity: error --> Exception: Call to undefined function get_accessories() /var/www/html/application/modules/outgoing_stok_atk/controllers/Outgoing_stok_atk.php 482
ERROR - 2025-10-25 13:19:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:19:48 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: SELECT *
FROM `new_inventory_4`
WHERE `deleted_date` IS NULL
ERROR - 2025-10-25 13:19:48 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 568
ERROR - 2025-10-25 13:20:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:20:36 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:20:37 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:20:37 --> Query error: Table 'medika_db.new_inventory_4' doesn't exist - Invalid query: SELECT *
FROM `new_inventory_4`
WHERE `deleted_date` IS NULL
ERROR - 2025-10-25 13:20:37 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/application/helpers/app_helper.php 568
ERROR - 2025-10-25 13:23:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:23:02 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:23:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:23:11 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:23:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:23:53 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:24:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:24:14 --> Query error: Table 'medika_db.tr_cost_book' doesn't exist - Invalid query: SELECT `a`.`value_neraca`, `a`.`qty`
FROM `tr_cost_book` `a`
WHERE `a`.`id_material` = '2'
AND `a`.`id_gudang_ke` = 21
ORDER BY `a`.`tgl` DESC
ERROR - 2025-10-25 13:24:14 --> Severity: error --> Exception: Call to a member function row() on bool /var/www/html/application/modules/outgoing_stok_atk/controllers/Outgoing_stok_atk.php 175
ERROR - 2025-10-25 13:24:24 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:24:24 --> Query error: Table 'medika_db.tr_cost_book' doesn't exist - Invalid query: SELECT `a`.`value_neraca`, `a`.`qty`
FROM `tr_cost_book` `a`
WHERE `a`.`id_material` = '2'
AND `a`.`id_gudang_ke` = 21
ORDER BY `a`.`tgl` DESC
ERROR - 2025-10-25 13:24:24 --> Severity: error --> Exception: Call to a member function row() on bool /var/www/html/application/modules/outgoing_stok_atk/controllers/Outgoing_stok_atk.php 175
ERROR - 2025-10-25 13:27:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:27:15 --> Severity: error --> Exception: Call to undefined function generate_no_costbook() /var/www/html/application/modules/outgoing_stok_atk/controllers/Outgoing_stok_atk.php 213
ERROR - 2025-10-25 13:27:49 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:27:49 --> Severity: Compile Error --> Cannot redeclare generateNoTransaksi() (previously declared in /var/www/html/application/helpers/app_helper.php:1604) /var/www/html/application/helpers/app_helper.php 1671
ERROR - 2025-10-25 13:28:01 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:28:01 --> Severity: Compile Error --> Cannot redeclare generateNoTransaksi() (previously declared in /var/www/html/application/helpers/app_helper.php:1604) /var/www/html/application/helpers/app_helper.php 1671
ERROR - 2025-10-25 13:28:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:28:18 --> Query error: Table 'medika_db.price_book_produksi' doesn't exist - Invalid query: INSERT INTO `price_book_produksi` (`id_material`, `pusat`, `subgudang`, `produksi`, `price_book`, `status`, `kode_trans`, `updated_by`, `updated_date`) VALUES ('2', '300.0000', '301.0000', 101, 0, 'Y', 'TRM25100028', '1', '2025-10-25 13:28:18')
ERROR - 2025-10-25 13:28:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:28:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:28:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:28:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:30:34 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:23 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:28 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:31 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:56 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:31:57 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:09 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:15 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:18 --> Severity: error --> Exception: Call to undefined function get_list_satuan() /var/www/html/application/modules/outgoing_stok_atk/controllers/Outgoing_stok_atk.php 482
ERROR - 2025-10-25 13:32:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:29 --> Severity: Notice --> Undefined variable: nama_program /var/www/html/application/modules/users/views/login_animate.php 6
ERROR - 2025-10-25 13:32:32 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:32 --> Severity: error --> Exception: Call to undefined function get_list_satuan() /var/www/html/application/modules/outgoing_stok_atk/controllers/Outgoing_stok_atk.php 482
ERROR - 2025-10-25 13:32:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:32:59 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:33:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:33:18 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:35:42 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:35:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:35:48 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:35:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:36:22 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:36:44 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:36:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:36:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:36:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:12 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:14 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:14 --> Severity: error --> Exception: Call to undefined function history() /var/www/html/application/modules/stok_gudang_barang/controllers/Stok_gudang_barang.php 37
ERROR - 2025-10-25 13:37:34 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:35 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:41 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:46 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:50 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:54 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:37:55 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:38:00 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:38:00 --> Severity: error --> Exception: Too few arguments to function Stok_gudang_barang::download_excel(), 2 passed in /var/www/html/system/core/CodeIgniter.php on line 533 and exactly 3 expected /var/www/html/application/modules/stok_gudang_barang/controllers/Stok_gudang_barang.php 64
ERROR - 2025-10-25 13:38:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 526
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 527
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 538
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 539
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 541
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 542
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2676
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2764
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2768
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2780
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3034
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3166
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3168
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3169
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3460
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3461
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3936
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3942
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3998
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 4001
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:38:29 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:38:29 --> Severity: error --> Exception: Call to undefined function whiteCenterBold() /var/www/html/application/modules/stok_gudang_barang/controllers/Stok_gudang_barang.php 72
ERROR - 2025-10-25 13:38:29 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:38:29 --> 404 Page Not Found: /index
ERROR - 2025-10-25 13:40:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 526
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 527
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 538
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 539
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 541
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 542
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2676
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2764
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2768
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2780
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3034
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3166
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3168
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3169
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3460
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3461
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3936
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3942
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3998
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 4001
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:40:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:40:40 --> Severity: error --> Exception: Call to undefined function whiteCenterBold() /var/www/html/application/modules/stok_gudang_barang/controllers/Stok_gudang_barang.php 72
ERROR - 2025-10-25 13:40:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:40:40 --> 404 Page Not Found: /index
ERROR - 2025-10-25 13:41:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 526
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 527
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 538
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 539
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 541
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 542
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2676
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2764
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2768
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2780
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3034
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3166
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3168
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3169
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3460
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3461
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3936
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3942
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3998
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 4001
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:41:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:41:26 --> Severity: error --> Exception: Call to undefined function whiteCenterBold() /var/www/html/application/modules/stok_gudang_barang/controllers/Stok_gudang_barang.php 74
ERROR - 2025-10-25 13:41:26 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:41:26 --> 404 Page Not Found: /index
ERROR - 2025-10-25 13:41:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:41:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:41:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 526
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 527
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 538
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 539
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 541
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Shared/String.php 542
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2551
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2672
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2676
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2764
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2768
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 2780
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3034
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3166
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3168
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3169
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3457
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3460
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3461
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3891
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3936
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3942
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 3998
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Calculation.php 4001
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:41:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated /var/www/html/application/libraries/PHPExcel/Worksheet/AutoFilter.php 720
ERROR - 2025-10-25 13:41:40 --> Severity: error --> Exception: Call to undefined function whiteCenterBold() /var/www/html/application/modules/stok_gudang_barang/controllers/Stok_gudang_barang.php 76
ERROR - 2025-10-25 13:41:40 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:41:40 --> 404 Page Not Found: /index
ERROR - 2025-10-25 13:42:38 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
ERROR - 2025-10-25 13:42:39 --> $config['composer_autoload'] is set to TRUE but /var/www/html/application/vendor/autoload.php was not found.
