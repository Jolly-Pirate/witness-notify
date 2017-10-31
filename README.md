# witness-notify
Created by [@mahdiyari](https://steemit.com/@mahdiyari) for Sending Notification for Missed Blocks to [Discord Channel](https://discord.gg/QfRpwte) and [#witness-blocks](https://steemit.chat/channel/witness-blocks) Channel in steemit.chat
***
#### Install:
You must Change database.php file and Import database.sql to your database.<br>
or If you got error during Import, Create Following Table:<br>
```
CREATE TABLE `witnesses` (
  `id` int(11) NOT NULL,
  `user` text, TEXT NULL DEFAULT NULL,
  `userid` text, TEXT NULL DEFAULT NULL,
  `username` text, TEXT NULL DEFAULT NULL,
  `totalmiss` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `missed` int(11) NOT NULL DEFAULT '0',
  `lastconfirm` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
```
You must change nodejs/index.js and run it on a VPS or etc. (nodejs)<br>
you must change cronjob-1minute.php (channels name,channels id,user,password,bot token,Server URL)<br>
you must change cronjob-24hour.php (Server URL)<br>
<br>
Create Cronjobs for running cronjob-1minute.php every minutes and cronjob-24hour.php every 24 hours (Daily)

#### Run:
First Run cronjob-24hour.php manually for adding witnesses to database.
