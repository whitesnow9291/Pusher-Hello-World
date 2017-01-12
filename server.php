<?php
  require('vendor/autoload.php');

  $options = array(
    'encrypted' => true
  );
  $pusher = new Pusher(
    '0dc211b6a53ea69410e9',
    '8678ab2fde009f552fb3',
    '289530'
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>