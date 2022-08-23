<?php
namespace Models;

use \Config\Database;

class News
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  /**
   * CREATE
   * @return boolean
   */
  public function create($query, $content) : bool
  {
    $this->db->query("INSERT INTO news (`query`,`content`) VALUES (:query, :content)");
    $this->db->bind(':query', $query);
    $this->db->bind(':content', $content);
    if ($this->db->execute())
      return true;
    return false;
  }

  /**
   * READ
   * @return array
   */
  public function all() : array
  {
    $this->db->query("SELECT * FROM task");
    return $this->db->resultSet();
  }

  /**
   * GET
   * @return boolean
   */
  public function findByQuery($query)
  {
    $this->db->query("SELECT * FROM news WHERE query = :query LIMIT 1");
    $this->db->bind(':query', $query);
    $smtp =  $this->db->execute();
    $smtp->fetch();
  }
}