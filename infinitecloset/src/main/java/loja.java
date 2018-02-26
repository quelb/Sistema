/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */
public class loja {

    /**
     * @return the cod_loja
     */
    public int getCod_loja() {
        return cod_loja;
    }

    /**
     * @param cod_loja the cod_loja to set
     */
    public void setCod_loja(int cod_loja) {
        this.cod_loja = cod_loja;
    }

    /**
     * @return the descricao
     */
    public String getDescricao() {
        return descricao;
    }

    /**
     * @param descricao the descricao to set
     */
    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    /**
     * @return the cod_produto
     */
    public int getCod_produto() {
        return cod_produto;
    }

    /**
     * @param cod_produto the cod_produto to set
     */
    public void setCod_produto(int cod_produto) {
        this.cod_produto = cod_produto;
    }

    /**
     * @return the contato
     */
    public int getContato() {
        return contato;
    }

    /**
     * @param contato the contato to set
     */
    public void setContato(int contato) {
        this.contato = contato;
    }

    /**
     * @return the cod_usuario
     */
    public int getCod_usuario() {
        return cod_usuario;
    }

    /**
     * @param cod_usuario the cod_usuario to set
     */
    public void setCod_usuario(int cod_usuario) {
        this.cod_usuario = cod_usuario;
    }
    
        public loja () {
            
        }
    private int cod_loja;
    private String descricao;
    private int cod_produto;
    private int contato;
    private int cod_usuario;
}
