 <?php
//  echo 'i am now inside my php...'.'<br>';
  //server side
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['SERVER_NAME'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF']
  ];
;
  echo '<hr>';
  
  $client = [
    'Client Side Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
  ];
//  print_r($client);
  //client side note: server side and client side is called Full Stack
   ?>
