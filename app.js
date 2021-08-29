let botoesIncrementa = document.querySelectorAll('#btn-incrementa');
let botoesDecrementa = document.querySelectorAll('#btn-decrementa');

for (let botaoIncrementa of botoesIncrementa) {
    botaoIncrementa.addEventListener('click', incrementa);

    function incrementa() {
        let btn = botaoIncrementa.closest('.item');
        let quantidade = btn.querySelector('#quantidade');
        quantidade.value++;
        var preco = pegaPrecoItem(btn);
        adicionaAoTotal(preco);
    }
}

for (let botaoDecrementa of botoesDecrementa) {
    botaoDecrementa.addEventListener('click', decrementa);

    function decrementa() {
        let btn = botaoDecrementa.closest('.item');
        let quantidade = btn.querySelector('#quantidade');
        if (quantidade.value > 0) {
            quantidade.value--;
            var preco = pegaPrecoItem(btn);
            adicionaAoTotal(-preco);
        } else {
            alert("Não é possível diminuir 0 itens");
        }
    }
}

function pegaPrecoItem(item) {
    var precoItem = item.querySelector('.preco-item');
    return Number(precoItem.textContent);
}

function adicionaAoTotal(valor) {
    var elementoTotal = document.querySelector("#total");
    elementoTotal.value = valor + Number(elementoTotal.value);
}