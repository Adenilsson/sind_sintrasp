<?php
class User {
    private $id;
    private $nome;
    private $userName;
    private $matricula;
    private $email;
    private $cpf;
    private $tipo;
    private $perfilId;
    private $created;
    private $ativo;
    private $updated;
    private $funcaoId;
    

	/**
	 * @return mixed
	 */
	public function getFuncaoId() {
		return $this->funcaoId;
	}
	
	/**
	 * @param mixed $funcaoId 
	 * @return self
	 */
	public function setFuncaoId($funcaoId): self {
		$this->funcaoId = $funcaoId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUpdated() {
		return $this->updated;
	}
	
	/**
	 * @param mixed $updated 
	 * @return self
	 */
	public function setUpdated($updated): self {
		$this->updated = $updated;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAtivo() {
		return $this->ativo;
	}
	
	/**
	 * @param mixed $ativo 
	 * @return self
	 */
	public function setAtivo($ativo): self {
		$this->ativo = $ativo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCreated() {
		return $this->created;
	}
	
	/**
	 * @param mixed $created 
	 * @return self
	 */
	public function setCreated($created): self {
		$this->created = $created;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPerfilId() {
		return $this->perfilId;
	}
	
	/**
	 * @param mixed $perfilId 
	 * @return self
	 */
	public function setPerfilId($perfilId): self {
		$this->perfilId = $perfilId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return self
	 */
	public function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserName() {
		return $this->userName;
	}
	
	/**
	 * @param mixed $userName 
	 * @return self
	 */
	public function setUserName($userName): self {
		$this->userName = $userName;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
    

	/**
	 * @return mixed
	 */
	public function getMatricula() {
		return $this->matricula;
	}
	
	/**
	 * @param mixed $matricula 
	 * @return self
	 */
	public function setMatricula($matricula): self {
		$this->matricula = $matricula;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
}