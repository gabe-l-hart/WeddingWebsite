<!-- Get PHP Utils -->
<?php require '../scripts/utils.php'; ?>
<?php require '../scripts/registry.php'; ?>

<?php
  // Set up registry
  $reg = new Registry();
  $reg->setHost('localhost');
  $reg->setUser('root');
  $reg->setPW('root');

  // Connect to DB
  $reg->connect();
?>

<?php pageHeader("..", "Registry"); ?>
<?php subPageTop(); ?>

  <!-- Title -->
  <p style="font-size:32px; text-align:center">Registry</p>

  <!-- Item Grid -->
  <table cellpadding="0" cellspacing="0" border="0" class="fixedTable">
  <tbody>

  <tr><td width="5"></td>
  <td align="center" valign="top">
    <?php
      $item1 = new RegistryItem("./images/TEST.png", "test", "long test", "testItem1", "www.test.com");
      echo $item1->createSmallTile();
    ?>
  </td>
  <td width="10"></td>
  <td align="center" valign="top">
    <?php
      $item2 = new RegistryItem("./images/TEST.png", "test 2", "long test 2", "testItem2", "www.test.com");
      echo $item2->createSmallTile();
    ?>
  </td>
  <td width="5"></td></tr>

  </tbody>
  </table>

<?php subPageBottom(); ?>