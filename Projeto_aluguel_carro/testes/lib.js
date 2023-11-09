//rotina para montar e enviar as informacoes via POST
//de um formulário passado no parametro form
async function postForm(url,form){
    let data=Object.fromEntries(new FormData(form));
    const response = await axios.post(url,data);
    return response;
}

//rotina para obter os dados via metodo GET, 
//o param é opcional
async function getData(url,param=""){
    const response = await axios.get(url,param);
    return response;
}