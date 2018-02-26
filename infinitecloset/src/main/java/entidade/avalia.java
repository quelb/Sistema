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
@Table(name="avalia")

public class avalia  implements Serializable  {

    /**
     * @return the cod_avaliacao
     */
    public int getCod_avaliacao() {
        return cod_avaliacao;
    }

    /**
     * @param cod_avaliacao the cod_avaliacao to set
     */
    public void setCod_avaliacao(int cod_avaliacao) {
        this.cod_avaliacao = cod_avaliacao;
    }

    /**
     * @return the comentario
     */
    public String getComentario() {
        return comentario;
    }

    /**
     * @param comentario the comentario to set
     */
    public void setComentario(String comentario) {
        this.comentario = comentario;
    }

    /**
     * @return the coracao
     */
    public File getCoracao() {
        return coracao;
    }

    /**
     * @param coracao the coracao to set
     */
    public void setCoracao(File coracao) {
        this.coracao = coracao;
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
     * @return the data_hora
     */
    public int getData_hora() {
        return data_hora;
    }

    /**
     * @param data_hora the data_hora to set
     */
    public void setData_hora(int data_hora) {
        this.data_hora = data_hora;
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
     * @param cod_produto the tudo bem cod_produto to set
     */
    public void setCod_produto(int cod_produto) {
        this.cod_produto = cod_produto;
    }
        public avalia () {
            
        }
    @Id 
    @GeneratedValue(strategy = GenerationType.SEQUENCE)

    private int cod_avaliacao;
    private String comentario;
    private File coracao;
    private File foto;
    private int data_hora;
    private int cod_usuario;
    private int cod_produto;
}
