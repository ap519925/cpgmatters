<?php
$user = user_load_by_mail('tester@example.com');
if (!$user) {
  $user = \Drupal\user\Entity\User::create();
  $user->setUsername('testuser_mail_' . time());
  $user->setEmail('tester@example.com');
  $user->setPassword('password123');
  $user->activate();
  $user->save();
}

$result = _user_mail_notify('register_no_approval_required', clone $user);
var_dump($result);

// Check if there are any error logs
$query = \Drupal::database()->query("SELECT message, variables FROM {watchdog} ORDER BY wid DESC LIMIT 5");
foreach ($query as $row) {
  echo $row->message . "\n";
  print_r(unserialize($row->variables));
}
