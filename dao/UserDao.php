<?php 
require("Conexao.php");
class UserDao{




    public static $instance;

   public function __construct() {
      //
    }

      public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UserDao();

        return self::$instance;
     }
    public function cadUser(User $user){
        try{
            $sql = "INSERT INTO tb_user(
                nome,
                user_name,
                matricula,
                cpf,
                email,
                tipo,
                tb_perfil_id,
                created,
                ativo,
                updated,
                tb_funcao_id
            )VALUE(
                :nome,
                :user_name,
                :matricula,
                :cpf,
                :email,
                :tipo,
                :tb_perfil_id,
                :created,
                :ativo,
                :updated,
                :tb_funcao_id
            )";

 
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome",$user->getNome());
            $p_sql->bindValue(":user_name",$user->getUserName());
            $p_sql->bindValue(":matricula",$user->getMatricula());
            $p_sql->bindValue(":cpf",$user->getCpf());
            $p_sql->bindValue(":email",$user->getEmail());
            $p_sql->bindValue("tipo", $user->getTipo());
            $p_sql->bindValue(":tb_perfil_id",$user->getPerfilId());
            $p_sql->bindValue(":created",$user->getCreated());
            $p_sql->bindValue(":ativo",$user->getAtivo());
            $p_sql->bindValue(":updated",$user->getUpdated());
            $p_sql->bindValue(":tb_funcao_id", $user->getFuncaoId());
         
            var_dump($p_sql);
            return $p_sql->execute();
        }catch(Exception $e){
            print_r("Ocorreu um erro ao cadastra o usuario.".$e->getMessage());
            /*GeraLog::getInstance()->inserirLog("Erro: Código: "
           . $e->getCode() . " Mensagem: " . $e->getMessage());*/
        }
    }   
};