<!-- File: /app/View/Users/view.ctp -->

<h1><?php echo h($user['User']['name']); ?></h1>

<p><small>Created: <?php echo $user['User']['created']; ?></small></p>

<p><?php echo h($user['User']['password']); ?></p>
<p><?php echo h($user['User']['email']); ?></p>