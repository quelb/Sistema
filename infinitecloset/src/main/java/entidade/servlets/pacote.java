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
@Table(name="pacote")

public class pacote  implements Serializable {

    /**
     * @return the cod_aluguel
     */
    public int getCod_aluguel() {
        return cod_aluguel;
    }

    /**
     * @param cod_aluguel the cod_aluguel to set
     */
    public void setCod_aluguel(int cod_aluguel) {
        this.cod_aluguel = cod_aluguel;
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
        public pacote () {
            
        }
    @Id 
    @GeneratedValue(strategy = GenerationType.SEQUENCE)

    private int cod_aluguel;
    private int cod_produto;
    private int cod_plano;
}
