<?php
// 1. Criar um cookie com tempo de expiração específico
setcookie("usuario", "Joao", time() + 3600); // Expira em 1 hora
echo "1. Cookie 'usuario' criado com sucesso.<br>";

// 2. Verificar se um cookie existegiy
if (isset($_COOKIE['usuario'])) {
    echo "2. Cookie 'usuario' existe: " . $_COOKIE['usuario'] . "<br>";
} else {
    echo "2. Cookie 'usuario' não existe.<br>";
}

// 3. Excluir um cookie
setcookie("usuario", "", time() - 3600); // Define a expiração no passado
echo "3. Cookie 'usuario' excluído.<br>";

// 4. Criar um cookie com um tempo de expiração específico
setcookie("tempo_especifico", "valor", time() + 7200); // Expira em 2 horas
echo "4. Cookie 'tempo_especifico' criado com tempo de expiração de 2 horas.<br>";

// 5. Definir um cookie que expire ao fechar o navegador
setcookie("sessao", "valor"); // Sem data de expiração
echo "5. Cookie 'sessao' criado para expirar ao fechar o navegador.<br>";

// 6. Definir o caminho e o domínio de um cookie
setcookie("caminho_dominio", "valor", time() + 3600, "/diretorio/", "exemplo.com");
echo "6. Cookie 'caminho_dominio' criado com caminho '/diretorio/' e domínio 'exemplo.com'.<br>";

// 7. Acessar o valor de um cookie
if (isset($_COOKIE['tempo_especifico'])) {
    echo "7. Valor do cookie 'tempo_especifico': " . $_COOKIE['tempo_especifico'] . "<br>";
}

// 8. Alterar o valor de um cookie
setcookie("tempo_especifico", "novo_valor", time() + 3600);
echo "8. Valor do cookie 'tempo_especifico' alterado para 'novo_valor'.<br>";

// 9. Tamanho máximo de um cookie
echo "9. O tamanho máximo de um cookie é 4KB (4096 bytes).<br>";

// 10. Verificar se um cookie expirou
if (!isset($_COOKIE['usuario'])) {
    echo "10. O cookie 'usuario' expirou ou foi excluído.<br>";
}

// 11. Definir um cookie com valores especiais, como JSON
$json = json_encode(["nome" => "Ana", "idade" => 25]);
setcookie("dados_usuario", $json, time() + 3600);
echo "11. Cookie 'dados_usuario' criado com valor JSON.<br>";

// 12. Recuperar um cookie JSON
if (isset($_COOKIE['dados_usuario'])) {
    $dados = json_decode($_COOKIE['dados_usuario'], true);
    echo "12. Dados do cookie JSON: Nome = " . $dados['nome'] . ", Idade = " . $dados['idade'] . "<br>";
}

// 13. Segurança dos cookies
echo "13. Cookies podem ser seguros se usados com os atributos 'Secure' e 'HttpOnly'.<br>";

// 14. Diferença entre 'secure' e 'httponly'
setcookie("cookie_seguro", "valor", [
    'expires' => time() + 3600,
    'path' => '/',
    'secure' => true,      // Só será enviado via HTTPS
    'httponly' => true,    // Não acessível via JavaScript
    'samesite' => 'Strict' // Previne ataques CSRF
]);
echo "14. Cookie 'cookie_seguro' criado com atributos 'Secure', 'HttpOnly' e 'SameSite=Strict'.<br>";

// 15. Definir um cookie com o caminho para um diretório específico
setcookie("cookie_caminho", "valor", time() + 3600, "/diretorio/");
echo "15. Cookie 'cookie_caminho' criado com caminho específico '/diretorio/'.<br>";
?>