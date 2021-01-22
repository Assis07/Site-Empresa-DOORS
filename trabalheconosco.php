<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortout icon" href="favicon.ico.png"/>
        <title>Trabalhe Conosco Doors</title>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="trabalheconosco"> 
        <form name='formulario' method='post' action='dadostc.php'>                     
            <fieldset class="grupo">               
                <h1>Formulário de Cadastro</h1><br>
                <table>
                    <tr>
                        <td>Nome Completo:</td>
                        <td> <input type='text' name='nome' size="35"/></td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td> <input type='date' name='data' size="35"/></td>
                    </tr>           
                    <tr>
                        <td>CPF:</td>
                        <td><input type='cpf' name='cpf' size="35"/></td>
                    </tr>
                    <tr>
                        <td><label for="estado">Estado</label></td>
                        <td>
                        <select name="estado" id="estado">
                            
                            <option value="-"</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td><input type='text' name='cidade' size="35"/></td>
                    </tr>                    
                    <tr>
                        <td>E-mail:</td>
                        <td><input type='email' name='email' size="35"/></td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td><input type='telefone' name='telefone' size="35"/></td>
                    </tr>
                    <tr>
                        <td>Celular:</td>
                        <td><input type='celular' name='celular' size="35"/></td>
                    </tr>                   
                    <td><label for="escolaridade">Escolaridade</label></td>
                        <td>
                        <select name="escolaridade" id="escolaridade">
                            <option value="EFI">Ensino Fundamental Incompleto</option>
                            <option value="EMC">Ensino médio Completo</option>
                            <option value="EMI">Ensino médio Incompleto</option>
                            <option value="MES">Mestrado</option>
                            <option value="DOU">Doutorado</option>
                        </select>
                        </td>                   
                    <tr>
                        <td>Experiência:</td>
                        <td>
                        <textarea rows="6" id="exp" name="exp" style="width: 600px;"></textarea>
                        <td>
                    </tr>
                    <tr>
                        <td>Gênero: </td>
                        <td><input type="radio" name="sexo" value="Masculino" checked="" >Masculino <input type="radio" name="sexo" value="Feminino">Feminino</td>
                    </tr>

                    <tr>
                        <td>    
                            <button class="botao" type="cadastrar" name="cadastrar">Cadastrar</button>
                        <td>
                    </tr>  
                </table>                
            </fieldset>
        </form>
            </div>  
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
