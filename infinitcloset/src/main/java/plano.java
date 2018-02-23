/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */
public class plano {

    /**
     * @return the cod_plano
     */
    public int getCod_plano() {
        return cod_plano;
    }

    /**
     * @param cod_plano the cod_plano to set
     */
    public void setCod_plano(int cod_plano) {
        this.cod_plano = cod_plano;
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
     * @return the num_cartao
     */
    public int getNum_cartao() {
        return num_cartao;
    }

    /**
     * @param num_cartao the num_cartao to set
     */
    public void setNum_cartao(int num_cartao) {
        this.num_cartao = num_cartao;
    }

    /**
     * @return the cod_seguranca
     */
    public int getCod_seguranca() {
        return cod_seguranca;
    }

    /**
     * @param cod_seguranca the cod_seguranca to set
     */
    public void setCod_seguranca(int cod_seguranca) {
        this.cod_seguranca = cod_seguranca;
    }

    /**
     * @return the banco
     */
    public String getBanco() {
        return banco;
    }

    /**
     * @param banco the banco to set
     */
    public void setBanco(String banco) {
        this.banco = banco;
    }
        public plano () {
            
        }
    private int cod_plano;
    private String nome;
    private int num_cartao;
    private int cod_seguranca;
    private String banco;
}
