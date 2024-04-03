

function transformStringToCode(str) {
    return str.split("").map((char, i) => {
        return char.charCodeAt();
    });
}
