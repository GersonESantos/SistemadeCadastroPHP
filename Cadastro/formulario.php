<?php
   if(isset($_POST['submit']))
   {
     print_r('Nome: ' . $_POST['nome']);
     print_r('<br>');
     print_r('Senha: ' . $_POST['senha']);
     print_r('<br>');
     print_r('Email :' . $_POST['email']);
     print_r('<br>');
     print_r('Telefone :' . $_POST['telefone']);
     print_r('<br>');
     print_r('Sexo :' . $_POST['sexo']);
     print_r('<br>');
     print_r('Data de Nascimento :' . $_POST['data_nascimento']);print_r('<br>');
    print_r('Cidade :' . $_POST['cidade']);print_r('<br>');
     print_r('Estado :' . $_POST['estado']);print_r('<br>');
     print_r('Endereco :' . $_POST['endereco']);print_r('<br>'); 
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(017,54,71));
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 15px;
            background: rgba(0, 0, 0, 0.7);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
        }
        fieldset{
            color: white;
            border: 3px solid dodgerblue;
        }
        legend{
            padding: 10px 0;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8%;
            width: 100%;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            width: 100%;
            font-size: 16px;
            letter-spacing: 2px;
        /*
            padding: 10px 0;
            margin-bottom: 30px;
           */ 
        }
        .labelInput{
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            transition: .5s;
            /*letter-spacing: 2px;
            padding: 10px 0;
            color: white;
            */
        }
        .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
            top: -18px;
            left: 0;
            color: dodgerblue;
            font-size: 12px;
        }
        #data_nascimento{
            border: none;
            padding: 10px 0;
            border-radius: 10px;
            outline: none;
            font-size: 16px;

            /*background: none;
            border-bottom: 1px solid white;
            color: white;
            width: 100%;
            letter-spacing: 2px;
            */
        }
        #submit{
            background: none;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(017,54,71));
            border: 2px solid white;
            color: white;
            padding: 5px 20px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            border-radius: 10px;
            transition: .5s;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
           /*
            background: none;
            color: dodgerblue;
            border: 2px solid dodgerblue;
            */
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="type" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="confirma_senha" id="confirma_senha" class="inputUser" required>
                    <label for="confirma_senha" class="labelInput">Confirma Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero"  value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                <br>
            
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento"  required>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>

                <button type="submit" name="submit" id="submit">Cadastrar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>