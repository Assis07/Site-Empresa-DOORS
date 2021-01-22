<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortout icon" href="favicon.ico.png"/>
        <title>Contato Doors</title>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="contato"> 
            <form name='formulario' method='post' action='dados.php'>                     
                <fieldset class="grupo"> 
                    <div id="contatotitulo"><h1>Contato</h1>
                    </div>
                    <div class="imagenscontato">   
                        <img src="imagens/icones-contato.png">
                    </div>
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
                            <td>Assunto:</td>
                            <td>
                                <select name="mensagem" id="mensagem">
                                    <option value="--">--</option>
                                    <option value="ELO">Elogio(s)</option>
                                    <option value="ENC">Encomendar</option>
                                    <option value="MEL">Melhoria(s)</option>
                                    <option value="CRI">Crítica(s)</option>  
                                    <option value="OUT">Outro(s)</option>  
                                </select></td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                Mensagem:
                            </td>                      
                            <td>
                                <textarea rows="6" type='msg 'id="msg" name="msg" style="width: 300px;"></textarea>
                            <td>
                        </tr>

                        <tr>
                            <td>Gênero: </td>
                            <td><input type="radio" name="sexo" value="Masculino" checked="" >Masculino <input type="radio" name="sexo" value="Feminino">Feminino</td>
                        </tr>
                        <tr>
                            <td>    
                                <button class="botao" type="submit" name="submit">Enviar</button>
                            <td>
                        </tr>                     
                    </table>              
                </fieldset>
            </form>
        </div>
        <div id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.074936116876!2d-49.08467068498422!3d-26.485531983313408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94de94fdedba401f%3A0x4b880a175426c1ea!2sR.+Jo%C3%A3o+Marcato%2C+28+-+Centro%2C+Jaragu%C3%A1+do+Sul+-+SC%2C+89251-670!5e0!3m2!1spt-BR!2sbr!4v1539090146070" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>         
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
