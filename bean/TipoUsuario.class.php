<?php
class TipoUsuario{
    private $id;
    private $descricao;
    private $permicao;

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
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of permicao
     */ 
    public function getPermicao()
    {
        return $this->permicao;
    }

    /**
     * Set the value of permicao
     *
     * @return  self
     */ 
    public function setPermicao($permicao)
    {
        $this->permicao = $permicao;

        return $this;
    }
}