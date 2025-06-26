
function mudarConteudo(idDaSecao) {
    // 1. Pega todas as seções de conteúdo
    const secoes = document.querySelectorAll('.conteudo-secao');

    // 2. Itera sobre cada seção
    secoes.forEach(secao => {
        // 3. Remove a classe 'active' de todas as seções, escondendo-as
        secao.classList.remove('active');
    });

    // 4. Encontra a seção com o ID correspondente ao botão clicado
    const secaoAtiva = document.getElementById(idDaSecao);

    // 5. Se a seção for encontrada, adiciona a classe 'active' para exibi-la
    if (secaoAtiva) {
        secaoAtiva.classList.add('active');
    }
}

// Opcional: Garante que a seção "Início" esteja ativa ao carregar a página
document.addEventListener('DOMContentLoaded', () => {
    mudarConteudo('inicio');
});