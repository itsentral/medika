<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-10-24 01:26:29 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'medika'@'localhost' (using password: YES) D:\LOCAL_SERVER\medika\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2025-10-24 01:26:29 --> Unable to connect to the database
ERROR - 2025-10-24 01:26:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'medika'@'localhost' (using password: YES) D:\LOCAL_SERVER\medika\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2025-10-24 01:26:30 --> Severity: Warning --> session_start(): Failed to initialize storage module: user (path: ) D:\LOCAL_SERVER\medika\system\libraries\Session\Session.php 137
ERROR - 2025-10-24 01:26:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'medika'@'localhost' (using password: YES) D:\LOCAL_SERVER\medika\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2025-10-24 01:26:31 --> Unable to connect to the database
ERROR - 2025-10-24 01:26:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'medika'@'localhost' (using password: YES) D:\LOCAL_SERVER\medika\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2025-10-24 01:26:31 --> Unable to connect to the database
ERROR - 2025-10-24 01:26:31 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool D:\LOCAL_SERVER\medika\system\database\drivers\mysqli\mysqli_driver.php 401
ERROR - 2025-10-24 01:26:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 01:27:12 --> Query error: Table 'medika_db.users' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
WHERE `users`.`id_user` = ''
AND `id_group` = 1
ERROR - 2025-10-24 01:31:53 --> Query error: Table 'medika_db.users' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
WHERE `users`.`id_user` = ''
AND `id_group` = 1
ERROR - 2025-10-24 01:38:05 --> Query error: Table 'medika_db.users' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
WHERE `users`.`id_user` = ''
AND `id_group` = 1
ERROR - 2025-10-24 01:48:57 --> Query error: Table 'medika_db.user_groups' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
WHERE `users`.`id_user` = ''
AND `id_group` = 1
ERROR - 2025-10-24 02:44:36 --> Query error: Table 'medika_db.identitas' doesn't exist - Invalid query: SELECT *
FROM `identitas`
WHERE `identitas`.`ididentitas` = 1
ERROR - 2025-10-24 02:46:13 --> Severity: Notice --> Undefined variable: nama_program D:\LOCAL_SERVER\medika\application\modules\users\views\login_animate.php 6
ERROR - 2025-10-24 02:46:32 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Users.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 02:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:46:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:46:36 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:46:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:07 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:07 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Pendaftaran.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:09 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:11 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:11 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:12 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Users.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 02:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:14 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:14 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:16 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:16 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:19 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:19 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 09:49:23 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Menus.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:27 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Menus.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 02:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:50 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:50 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:52 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:52 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 02:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 03:49:54 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:49:54 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Laboratorium.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 09:49:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 03:53:50 --> Severity: Notice --> Undefined variable: nama_program D:\LOCAL_SERVER\medika\application\modules\users\views\login_animate.php 6
ERROR - 2025-10-24 03:54:18 --> Query error: Table 'medika_db.permissions' doesn't exist - Invalid query: SELECT *
FROM `users`
JOIN `user_groups` ON `users`.`id_user` = `user_groups`.`id_user`
JOIN `group_permissions` ON `user_groups`.`id_group` = `group_permissions`.`id_group`
JOIN `permissions` ON `group_permissions`.`id_permission` = `permissions`.`id_permission`
WHERE `nm_permission` = 'Users.View'
AND `users`.`id_user` = '54'
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Undefined variable: data D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Trying to get property 'kdcab' of non-object D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Undefined variable: data D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Trying to get property 'kdcab' of non-object D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Undefined variable: data D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Trying to get property 'kdcab' of non-object D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Undefined variable: data D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 03:55:06 --> Severity: Notice --> Trying to get property 'kdcab' of non-object D:\LOCAL_SERVER\medika\application\modules\users\views\users_form.php 84
ERROR - 2025-10-24 04:33:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 04:33:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:27:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:28:13 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:28:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:28:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:29:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:31:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:31:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:31:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:31:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:31:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:31:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:33:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:33:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:33:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:33:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:33:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:33:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:35:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:38:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:39:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:39:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:39:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:41:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:41:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:41:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:42:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:42:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:42:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:42:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:42:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:42:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:43:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:44:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:45:24 --> Severity: Notice --> Undefined variable: set_value D:\LOCAL_SERVER\medika\application\modules\users\views\login.php 13
ERROR - 2025-10-24 06:45:24 --> Severity: error --> Exception: Function name must be a string D:\LOCAL_SERVER\medika\application\modules\users\views\login.php 13
ERROR - 2025-10-24 06:45:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:45:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:45:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:50:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:51:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:51:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:51:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:51:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:51:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:51:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 06:52:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:00:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:00:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:00:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:01:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:04:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:05:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:05:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:05:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:05:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:05:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:05:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:06:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:07:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:08:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:08:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:08:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:09:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:10:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:11:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:17:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:18:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:18:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:18:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:19:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:21:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:13 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:13 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:13 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:22:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:25:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:25:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:25:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:49:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 07:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:49:26 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 14:49:26 --> Query error: Table 'medika_db.rs_hdtransaksirj' doesn't exist - Invalid query: SELECT a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, a.id_departemen, 
			   a.id_dokter AS nama_dokter , a.no_urut, a.id_customer, a.tgl_entry,a.via,
			   b.nama_pasien, b.status_pasien, 
	           c.nama_departemen, e.nama_customer
	         FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			 WHERE 1=1 AND a.status_selesai!='1' AND a.id_departemen='DP1712011'
				AND (
				a.medrec LIKE '%%'
				OR b.nama_pasien LIKE '%%'
				OR a.noreg LIKE '%%'
	        )
ERROR - 2025-10-24 14:49:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 07:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 07:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:50:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 14:50:05 --> Query error: Table 'medika_db.rs_hdtransaksirj' doesn't exist - Invalid query: SELECT a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, a.id_departemen, 
			   a.id_dokter AS nama_dokter , a.no_urut, a.id_customer, a.tgl_entry,a.via,
			   b.nama_pasien, b.status_pasien, 
	           c.nama_departemen, e.nama_customer
	         FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			 WHERE 1=1 AND a.status_selesai!='1' AND a.id_departemen='DP1712011'
				AND (
				a.medrec LIKE '%%'
				OR b.nama_pasien LIKE '%%'
				OR a.noreg LIKE '%%'
	        )
ERROR - 2025-10-24 14:50:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 07:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:50:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 07:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:50:09 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 14:50:09 --> Query error: Table 'medika_db.rs_hdtransaksirj' doesn't exist - Invalid query: SELECT a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, a.id_departemen, 
			   a.id_dokter AS nama_dokter , a.no_urut, a.id_customer, a.tgl_entry,a.via,
			   b.nama_pasien, b.status_pasien, 
	           c.nama_departemen, e.nama_customer
	         FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			 WHERE 1=1 AND a.status_selesai!='1' AND a.id_departemen='DP1712011'
				AND (
				a.medrec LIKE '%%'
				OR b.nama_pasien LIKE '%%'
				OR a.noreg LIKE '%%'
	        )
ERROR - 2025-10-24 14:50:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 07:51:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:51:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:51:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:52:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:52:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:52:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 07:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:59:08 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:06:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:10:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:11:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:12:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:13:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:20:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:23:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:23:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:23:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:23:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:23:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:24:17 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 08:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 15:24:18 --> Query error: Table 'medika_db.rs_hdtransaksirj' doesn't exist - Invalid query: SELECT a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, a.id_departemen, 
			   a.id_dokter AS nama_dokter , a.no_urut, a.id_customer, a.tgl_entry,a.via,
			   b.nama_pasien, b.status_pasien, 
	           c.nama_departemen, e.nama_customer
	         FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			 WHERE 1=1 AND a.status_selesai!='1' AND a.id_departemen='DP1712011'
				AND (
				a.medrec LIKE '%%'
				OR b.nama_pasien LIKE '%%'
				OR a.noreg LIKE '%%'
	        )
ERROR - 2025-10-24 15:24:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 08:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 09:24:18 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 15:24:18 --> Query error: Table 'medika_db.rs_hdtransaksirj' doesn't exist - Invalid query: SELECT a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, a.id_departemen, 
			   a.id_dokter AS nama_dokter , a.no_urut, a.id_customer, a.tgl_entry,a.via,
			   b.nama_pasien, b.status_pasien, 
	           c.nama_departemen, e.nama_customer
	         FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			 WHERE 1=1 AND a.status_selesai!='1' AND a.id_departemen='DP1712011'
				AND (
				a.medrec LIKE '%%'
				OR b.nama_pasien LIKE '%%'
				OR a.noreg LIKE '%%'
	        )
ERROR - 2025-10-24 15:24:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\LOCAL_SERVER\medika\system\core\Exceptions.php:272) D:\LOCAL_SERVER\medika\system\core\Common.php 565
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:24:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:25:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:26:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:26:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:26:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:26:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 08:26:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 20:58:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 20:58:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 20:58:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 20:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 20:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:00:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:00:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:00:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:00:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:00:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:04:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:05:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:05:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:05:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:05:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:05:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:07:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:07:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:07:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:07:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:07:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:08:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 371
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 374
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 377
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 529
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 530
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 531
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 532
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 533
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 659
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 660
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 661
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 662
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 663
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 705
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 22:09:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\mpdf\classes\grad.php 706
ERROR - 2025-10-24 21:09:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:09:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:09:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:09:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:09:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:13:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:14:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:17:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:18:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:17 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:19:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:20:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:21:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:35 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:22:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:23:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:24:53 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:25:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:25:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:25:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:25:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:25:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:46:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:47:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:48:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:49:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:49:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:49:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:49:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:49:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:28 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:28 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:28 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:28 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:28 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:53:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:54:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:58:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 21:59:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:34 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:00:56 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:04 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:01:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:02 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:02:46 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:03:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:04:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:04:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:04:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:04:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:04:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:28:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:28:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:28:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:28:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:28:48 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:08 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:29:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:30:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:42 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:31:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:10 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:49 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:32:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:03 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:26 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:54 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:33:55 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:09 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:34:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:35:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:35:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:35:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:35:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:35:40 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:36:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:36:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:36:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:36:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:36:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:38:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:43 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:39:50 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:49:39 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:54:57 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:54:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:54:58 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:54:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:01 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:55:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:27 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:27 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:27 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:56:28 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:57:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:57:19 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:57:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 22:57:20 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:31 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:52 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:01:59 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:02:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:02:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:02:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:02:47 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:04:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:07 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:18 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:22 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:06:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:44 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:08:45 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:00 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:23 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:24 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:30 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:09:51 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:11 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:36 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:10:37 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:11:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:11:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:11:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:11:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:06 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:13:38 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:16:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:16:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:16:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:16:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:16 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:18:41 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:14 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:15 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:25 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:29 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:30 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 23:20:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:32 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:20:33 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:21:47 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 23:22:05 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated D:\LOCAL_SERVER\medika\application\libraries\Mpdf.php 28275
ERROR - 2025-10-24 23:22:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:05 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:12 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:21 --> 404 Page Not Found: /index
ERROR - 2025-10-24 23:22:22 --> 404 Page Not Found: /index
