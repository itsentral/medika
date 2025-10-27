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
