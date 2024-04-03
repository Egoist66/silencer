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

function convertUTF16ToAlphabet(encodedText = '') {
    let result = '';
    for (let i = 0; i < encodedText.length; i += 4) {
        const hexCode = encodedText.substr(i, 4);
        const charCode = parseInt(hexCode, 16);
        const char = String.fromCharCode(charCode);
        result += char;
    }
    return result;
}

decode.addEventListener('click', () => {
    decodeMessage.value = convertUTF16ToAlphabet(decodeMessage.value).trim();
})