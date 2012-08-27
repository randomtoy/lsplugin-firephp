lsplugin-firephp
================

Плагин FirePHP для разработчиков

Простой плагин для лайвстрит.

Выполняет замену var_dump, подходит для отладки кода.

позволяет выводить в любом месте лог php переменной
например так:
$var = array('10','20');

PluginFirephp::GetLog($var);

используется совместно с дополнением FirePHP для Firefox
https://addons.mozilla.org/ru/firefox/addon/firephp/