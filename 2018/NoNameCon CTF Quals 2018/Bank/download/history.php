<?php
include 'conf.php';
session_start();
if( !$_SESSION['id'] ) {
  header('Location: login.php');
  die;
}
$type = $_GET['type'] ?? 'html';

$stmt = $pdo->prepare('SELECT id, (SELECT username FROM users WHERE id=sender) as sender,(SELECT username FROM users WHERE id=recipient) as recipient, amount, description FROM transactions WHERE (sender = :sender OR recipient = :recipient) ORDER BY id DESC');
$stmt->bindParam(':sender', $_SESSION['id'], PDO::PARAM_INT);
$stmt->bindParam(':recipient', $_SESSION['id'], PDO::PARAM_INT);
$stmt->execute();

$transactions = [];
while( $row = $stmt->fetch() )
  $transactions []= $row;

$history_html = '';
$history_html .= <<<EOT
    <table style="width:100%;text-align:left;border: 3px solid black;">
      <tr><th width=20>ID</th><th width=100>Sender</th><th width=100>Recipient</th><th width=50>Amount</th><th width=500>Description</th></tr>
EOT;
foreach($transactions as $transaction) {
  $history_html .= sprintf('<tr><td>%u</td><td>%s</td><td>%s</td><td>%u</td><td>%s</td></tr>'. PHP_EOL,
    $transaction['id'],
    htmlentities($transaction['sender']),
    htmlentities($transaction['recipient']),
    $transaction['amount'],
    $type === 'html' ? htmlentities($transaction['description']) : $transaction['description']
  );
}
$history_html .= <<<EOT
    </table>
EOT;

if( $type === 'pdf' ) {
  $tmpfile  = tempnam(sys_get_temp_dir(), sprintf('bank-%u-', $_SESSION['id']));
  $htmlfile = $tmpfile . '.html';
  $pdffile  = $tmpfile . '.pdf';
  file_put_contents($htmlfile, $history_html);
  exec("xvfb-run wkhtmltopdf $htmlfile $pdffile");
  header('Content-Type: application/pdf');
  readfile($pdffile);
  unlink($tmpfile); unlink($htmlfile); unlink($pdffile);
  die;
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php include './partials/head.php' ?>
</head>
<body>
  <div class="banner">
    <?php include './partials/user_header.php' ?>
  </div>
  <div class="jumbotron masthead">
    <div class="container wh-45">
    <p>Transaction History</p>
    <?=$history_html;?>
    </div>
  </div>
  <?php include './partials/footer.php' ?>
  <script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
      speed: 0.5,
      imgWidth: 1366,
      imgHeight: 768
    })
  </script>
</body>
</html>