<?php

require_once './app/DbManager.php';

try {
    $db = getDb();
    print '接続に成功しました。' . '<br>';
    $sql = 'SELECT * FROM test ORDER BY id';
    $lists = ($db->query($sql)->fetchALL(PDO::FETCH_ASSOC));

    foreach ($lists as $list) {
        print $list['id'] . '<br>';
        print $list['test_name'] . '<br>';
    }

} catch (PDOException $e) {
    print "接続エラー: {$e->getMessage()}";
} finally {
    $dbh = null;
}


