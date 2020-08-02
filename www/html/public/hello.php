<?php

require_once '../private/DbManager.php';

try {
    $db = getDb();
    print 'Hello, PHP!!' . '<br>';
    print '接続に成功しました。' . '<br>';
    print '<hr>';
    $sql = 'SELECT * FROM tests ORDER BY id';
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



