
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
@Table(name="looks")

public class looks  implements Serializable {

    /**
     * @return the cod_publi
     */
    public int getCod_publi() {
        return cod_publi;
    }

    /**
     * @param cod_publi the cod_publi to set
     */
    public void setCod_publi(int cod_publi) {
        this.cod_publi = cod_publi;
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
     * @return the link_produto
     */
    public String getLink_produto() {
        return link_produto;
    }

    /**
     * @param link_produto the link_produto to set
     */
    public void setLink_produto(String link_produto) {
        this.link_produto = link_produto;
    }

    /**
     * @return the link_loja
     */
    public String getLink_loja() {
        return link_loja;
    }

    /**
     * @param link_loja the link_loja to set
     */
    public void setLink_loja(String link_loja) {
        this.link_loja = link_loja;
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
        public looks () {
            
        }
    @Id 
    @GeneratedValue(strategy = GenerationType.SEQUENCE)

    private int cod_publi;
    private File foto;
    private int cod_usuario;
    private String link_produto;
    private String link_loja;
    private String descricao;
    private String tamanho;
    
}
