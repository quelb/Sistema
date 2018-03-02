package entidade.servlets;


import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */
 @Entity
 @Table(name="troca")
 
public class troca implements Serializable {

    /**
     * @return the cod_troca
     */
    public int getCod_troca() {
        return cod_troca;
    }

    /**
     * @param cod_troca the cod_troca to set
     */
    public void setCod_troca(int cod_troca) {
        this.cod_troca = cod_troca;
    }

    /**
     * @return the proposta
     */
    public String getProposta() {
        return proposta;
    }

    /**
     * @param proposta the proposta to set
     */
    public void setProposta(String proposta) {
        this.proposta = proposta;
    }

    /**
     * @return the contato_fornecedor
     */
    public int getContato_fornecedor() {
        return contato_fornecedor;
    }

    /**
     * @param contato_fornecedor the contato_fornecedor to set
     */
    public void setContato_fornecedor(int contato_fornecedor) {
        this.contato_fornecedor = contato_fornecedor;
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
  
        public troca () {
        }
        
    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE)
    private int cod_troca;
    private String proposta;
    private int contato_fornecedor;
    private int cod_usuario;
    private int cod_produto;
}
