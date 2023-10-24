<?php
class Imagem{
    private $id;
    private $nome;
    private $userId;
    private $permicaoId;
    private $created;
    private $imagem;
    private $mensagemId;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of permicaoId
     */ 
    public function getPermicaoId()
    {
        return $this->permicaoId;
    }

    /**
     * Set the value of permicaoId
     *
     * @return  self
     */ 
    public function setPermicaoId($permicaoId)
    {
        $this->permicaoId = $permicaoId;

        return $this;
    }

    /**
     * Get the value of created
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */ 
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of mensagemId
     */ 
    public function getMensagemId()
    {
        return $this->mensagemId;
    }

    /**
     * Set the value of mensagemId
     *
     * @return  self
     */ 
    public function setMensagemId($mensagemId)
    {
        $this->mensagemId = $mensagemId;

        return $this;
    }
}