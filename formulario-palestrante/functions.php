<?php
function validaCPF($cpf) 
    {

        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }

// function enviaEmail($nome, $email, $tema)
//     {
//         //Destinatário - inscrito
//         $to = $email;


//         //Assunto
//         $subject = "Inscrição para a Semana do Conhecimento Sunset 2018";

//         //Mensagem
//         $message = "
//         <html>
//         <head>
//             <title>Inscrição para a Semana do Conhecimento Sunset 2018</title>
//         </head>
//         <body>
//             <p><strong>Obrigado ".$nome."por se inscrever para a Semana do Conhecimento da Sunset.</strong></p><br>
//             <p>Agradecemos pelo seu interesse em compartilhar o conhecimento. Sua inscrição será avaliada dentre outros inscritos e assim que aprovada, entraremos em contato.</p><br><br>
//             <p>Atenciosamente</p><br>
//             <p>Gente & Gestão Sunset Shoes</p>
//             <img src='\images\Sistema_Sunset.png' alt='Logo Sunset'/>            
//         </body>
//         </html>"
//     }
?>


