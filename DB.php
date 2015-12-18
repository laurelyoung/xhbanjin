<?php

/**
 * Created by PhpStorm.
 * User: laurel
 * Date: 15/12/14
 * Time: 下午9:10
 */
class DB
{
    private $conn = null;
    private $db_url = "localhost";
    private $dbname = "xhbanjin";
    private $username = "root";
    private $password = "";

    public function getConnection()
    {
        $this->conn = mysql_connect($this->db_url, $this->dbname, $this->username, $this->password);
        if (!$this->conn) {
            die("数据库连接失败" . mysql_error());
        }
    }

    /**
     * 执行数据库查询语句DQL
     * @param $dql
     * @return resource
     */
    public function executeDQL($dql)
    {
        $result = array();
        $result = mysql_query($dql, $this->conn) or die(mysql_error());
        return $result;
    }

    /**
     * 执行数据库操纵语句DML
     * @param $dml
     * @return resource
     */
    public function executeDML($dml)
    {
        $result = mysql_query($dml, $this->conn) or die(mysql_error());
        return $result;
    }
}

$sql = "insert into user(userName, password) values('zhangsan','1234')";

echo sprintf("insert into user(userName, password) values(%s, %s)", "lisi", "2222");