<?php
class DB extends DBmysql {
   public $dbhost = 'db';
   public $dbuser = 'root';
   public $dbpassword = 'root';
   public $dbdefault = 'glpitest';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
