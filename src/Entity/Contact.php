<?php
declare(strict_types=1);

namespace App\Entity;

class Contact
{
  /**
   * @var string
   */
  private $name;

  /**
   * @var string
   */
  private $email;

  /**
   * @var string
   */
  private $detail;

  /**
   * @return string
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * @param string $name
   *
   * @return self
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return string
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * @param string $email
   *
   * @return self
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * @return string
   */
  public function getDetail(): ?string
  {
    return $this->detail;
  }

  /**
   * @param string $detail
   *
   * @return self
   */
  public function setDetail(string $detail): self
  {
    $this->detail = $detail;

    return $this;
  }
}