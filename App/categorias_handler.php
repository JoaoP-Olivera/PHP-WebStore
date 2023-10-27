<?php include('config.php'); ?>

<?php
class categorias_handler{
    private $categorias;
    public $conexao_com_categorias;
    function __construct($conexao_com_o_db){
        $this->conexao_com_categorias = $conexao_com_o_db;
    }
    public function criar_categoria(string $sql){
        $this->conexao_com_categorias->query( $sql );
        $resultado_da_query = $this->conexao_com_categorias->affected_rows;
        $this->categorias = $resultado_da_query;
        return var_dump($this->categorias);
    }
    public function pegar_categorias(string $sql){
        $this->conexao_com_categorias->query( $sql );
        $resultado_da_pesquisa = $this->conexao_com_categorias->affected_rows;
        $this->categorias = $resultado_da_pesquisa;
        return var_dump( $this->categorias );

    }
    
}
?>