<?php
//model类
class Database{
	protected $pdo;
	public function __construct(){
		$this->pdo=new PDO('mysql:host=127.0.0.1;dbname=users','root','12345678');
	}
	/**
	 * $bind的形态
	 * ['username'=>?,'password'=>?,'sex'=>?]
	 */
	function insert($bind){
		
		$sql='insert into user(username,password,sex) values(?,?,?)';
		$stmt=$this->pdo->perpare($sql);
		$stmt->bindValue(1,$bind['username']);
		$stmt->bindValue(2,$bind['password']);
		$stmt->bindValue(3,$bind['sex']);
		$stmt->execute();
	}
	/**
	 * param string $sql,SQL查询语句
	 */
	function query($sql){
		$stmt=$this->pdo->query($sql);
		$rowset=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $rowset;
	}
}
?>