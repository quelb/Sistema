package entidade;


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
@Table(name="favorita")

public class favorita  implements Serializable  {

    /**
     * @return the cod_fav
     */
    public int getCod_fav() {
        return cod_fav;
    }

    /**
     * @param cod_fav the cod_fav to set
     */
    public void setCod_fav(int cod_fav) {
        this.cod_fav = cod_fav;
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
        public favorita () {
            
        }
    @Id 
    @GeneratedValue(strategy = GenerationType.SEQUENCE)

    private int cod_fav;
    private int cod_usuario;
    private int cod_produto;
}
