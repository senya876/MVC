<?php
#Автоматическая загрузка классов, их файлов подключения
spl_autoload_register(function ($classname){
   require_once 'core/' . $classname . '.php';
});

