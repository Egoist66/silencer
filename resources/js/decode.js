const decode = document.getElementById('decode');
const decodeMessage = document.getElementById('decode-message');

function decodeStringFromCode(codeArr = ''){
    let str = "";
    codeArr.replace(/[\[\]]/g, '')
        .split(",")
        .filter(Boolean)
        .forEach(item => {
            str += String.fromCharCode(item)
        })

    return str;

}

decode.addEventListener('click', () => {
    decodeMessage.value = decodeStringFromCode(decodeMessage.value).trim();
})