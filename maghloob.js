function maghloob() {
    let number = document.getElementById('n1').value;
    let reversedStr = "";
    for (let i = number.length - 1; i >= 0; i--) {
        reversedStr += number[i];
    }
    let reversedNumber = parseInt(reversedStr);
    document.getElementById('result').innerText = "مغلوب عدد وارد شده: " + reversedNumber;
}
