let input_quantidade = document.querySelector("#qt"),
    preco = document.querySelector("#preco"),
    output_total = document.querySelector("#total")

input_quantidade.oninput = function(){
    let precoValue = preco.textContent.replace("R$ ","").replace(",","."),
        resultado = (input_quantidade.value*precoValue).toFixed(2).replace(".",",")
    
    output_total.value = "R$ "+ resultado
}