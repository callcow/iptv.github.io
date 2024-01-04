<?php


 $content = file_get_contents('https://media.mediavitrina.ru/get_token');
 
 $pos = strpos($content, 'token":"');
 
 $content = substr($content, $pos);

 $pos = strpos($content, '"}}');

 $content = substr($content, 0, $pos);

 $content = str_replace('token":"','', $content);

 echo $content;
 
  // заставляем браузер показать окно сохранения файла
            header('Content-Type: application/x-mpegurl');
            header('Content-Disposition: attachment; filename=' . basename($filename));
            header('Cf-cache-status: DYNAMIC');
            header("Location:https://mobdrm.mediavitrina.ru/hls-livef1/russia1/index.m3u8?cdn=https%3A%2F%2Fuser27103.clients-cdnnow.ru&token=$content");
            
            echo $content;
?>