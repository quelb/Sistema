package entidade;


import java.io.File;
import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.SequenceGenerator;
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
 @Table(name="usuario")
 
 public class usuario implements Serializable {

    /**
     * @return the cod_usuario
     */
    public Integer getCod_usuario() {
        return cod_usuario;
    }

    /**
     * @param cod_usuario the cod_usuario to set
     */
    public void setCod_usuario(Integer cod_usuario) {
        this.cod_usuario = cod_usuario;
    }
 public usuario () {
            
        }
    @Id 
    @GeneratedValue(strategy = GenerationType.SEQUENCE, generator="seq-gen")
    @SequenceGenerator(name="seq-gen", sequenceName="seq_codusuario", allocationSize = 1)
    @Column(name = "codusuario")
    private Integer cod_usuario;
    private String email;
    private String senha;
    private String login;
    private String nome;
    private String sobrenome;
    private String apelido;
    private File foto;
    private int cpf;
    private int rg;
    private int contato;
    private int datnascimento;
    private String tamanho;
    private int cod_usu_q_add;
    
    /**
     * @return the login
     */
    public String getLogin() {
        return login;
    }

    /**
     * @param login the login to set
     */
    public void setLogin(String login) {
        this.login = login;
    }

   

    /**
     * @return the email
     */
    public String getEmail() {
        return email;
    }

    /**
     * @param email the email to set
     */
    public void setEmail(String email) {
        this.email = email;
    }

    /**
     * @return the senha
     */
    public String getSenha() {
        return senha;
    }

    /**
     * @param senha the senha to set
     */
    public void setSenha(String senha) {
        this.senha = senha;
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
     * @return the sobrenome
     */
    public String getSobrenome() {
        return sobrenome;
    }

    /**
     * @param sobrenome the sobrenome to set
     */
    public void setSobrenome(String sobrenome) {
        this.sobrenome = sobrenome;
    }

    /**
     * @return the apelido
     */
    public String getApelido() {
        return apelido;
    }

    /**
     * @param apelido the apelido to set
     */
    public void setApelido(String apelido) {
        this.apelido = apelido;
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
     * @return the cpf
     */
    public int getCpf() {
        return cpf;
    }

    /**
     * @param cpf the cpf to set
     */
    public void setCpf(int cpf) {
        this.cpf = cpf;
    }

    /**
     * @return the rg
     */
    public int getRg() {
        return rg;
    }

    /**
     * @param rg the rg to set
     */
    public void setRg(int rg) {
        this.rg = rg;
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
     * @return the datnascimento
     */
    public int getDatnascimento() {
        return datnascimento;
    }

    /**
     * @param datnascimento the datnascimento to set
     */
    public void setDatnascimento(int datnascimento) {
        this.datnascimento = datnascimento;
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
     * @return the cod_usu_q_add
     */
    public int getCod_usu_q_add() {
        return cod_usu_q_add;
    }

    /**
     * @param cod_usu_q_add the cod_usu_q_add to set
     */
    public void setCod_usu_q_add(int cod_usu_q_add) {
        this.cod_usu_q_add = cod_usu_q_add;
    }
  
}
