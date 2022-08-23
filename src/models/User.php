<?php
namespace Models;

use \Config\Database;

class User
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
  public function create($username) : bool
  {
    $this->db->query("INSERT INTO users (`username`,`token`) VALUES (:username, :token)");
    $this->db->bind(':username', $username);
    $this->db->bind(':token', generateToken());
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
    $this->db->query("SELECT * FROM users");
    return $this->db->resultSet();
  }

  /**
   * UPDATE
   * @return boolean
   */
  public function update($id, $data) : bool
  {
    $this->db->query("UPDATE users SET username = :username, token=:token WHERE id = :id");
    $this->db->bind(':id', $id);
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':token', $data['token']);
    if ($this->db->execute())
      return true;
    return false;
  }

  /**
   * GET
   * @return boolean
   */
  public function find($id)
  {
    $this->db->query("SELECT * FROM news WHERE query = :id LIMIT 1");
    $this->db->bind(':id', $id);
    $smtp = $this->db->execute();
    $smtp->fetch();
  }

  /**
   * DELETE
   * @return boolean
   */
  public function delete($id) : bool
  {
    $this->db->query("DELETE FROM users WHERE id = :id");
    $this->db->bind(':id', $id);
    if ($this->db->execute())
      return true;
    return false;
  }
}