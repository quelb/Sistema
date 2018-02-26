package entidade;


import java.io.File;
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
 @Table(name="produtos")
 
public class produtos  implements Serializable {
 
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
     * @return the nome
     */
    public String getNome() {
        return nome;
    }

    /**
     * @param nome the nome to set
     */
    public void setNome(String nome) {
        this.nome = nome;
    }

    /**
     * @return the foto
     */
    public File getFoto() {
        return foto;
    }

    /**
     * @param foto the foto to set
     */
    public void setFoto(File foto) {
        this.foto = foto;
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
     * @return the tamanho
     */
    public String getTamanho() {
        return tamanho;
    }

    /**
     * @param tamanho the tamanho to set
     */
    public void setTamanho(String tamanho) {
        this.tamanho = tamanho;
    }

    /**
     * @return the dicas_uso
     */
    public String getDicas_uso() {
        return dicas_uso;
    }

    /**
     * @param dicas_uso the dicas_uso to set
     */
    public void setDicas_uso(String dicas_uso) {
        this.dicas_uso = dicas_uso;
    }

    /**
     * @return the condicoes
     */
    public String getCondicoes() {
        return condicoes;
    }

    /**
     * @param condicoes the condicoes to set
     */
    public void setCondicoes(String condicoes) {
        this.condicoes = condicoes;
    }

    /**
     * @return the preco_original
     */
    public int getPreco_original() {
        return preco_original;
    }

    /**
     * @param preco_original the preco_original to set
     */
    public void setPreco_original(int preco_original) {
        this.preco_original = preco_original;
    }

    /**
     * @return the categoria
     */
    public String getCategoria() {
        return categoria;
    }

    /**
     * @param categoria the categoria to set
     */
    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    /**
     * @return the proposta_troca
     */
    public String getProposta_troca() {
        return proposta_troca;
    }

    /**
     * @param proposta_troca the proposta_troca to set
     */
    public void setProposta_troca(String proposta_troca) {
        this.proposta_troca = proposta_troca;
    }

    /**
     * @return the cod_pacote
     */
    public int getCod_pacote() {
        return cod_pacote;
    }

    /**
     * @param cod_pacote the cod_pacote to set
     */
    public void setCod_pacote(int cod_pacote) {
        this.cod_pacote = cod_pacote;
    }

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
    
        public produtos () {
            
        }
    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE)
    private int cod_produto;
    private String nome;
    private File foto;
    private String descricao;
    private String tamanho;
    private String dicas_uso;
    private String condicoes;
    private int preco_original;
    private String categoria;
    private String proposta_troca;
    private int cod_pacote;
    private int cod_loja;
}
