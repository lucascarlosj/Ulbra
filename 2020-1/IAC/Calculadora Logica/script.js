function operacoes() {
    let val1 = document.getElementById("val1").value;
    let val2 = document.getElementById("val2").value;
    let operation = document.getElementById("operation").value;
    let result
    if (operation === 'not') {
        if (val1 === '0' && val2 === '0')
            result = "True(1)";
        else if (val1 === '0' && val2 === '1')
            result = "False(0)";
        else if (val1 === '1' && val2 === '1')
            result = "False(0)";
        else
            result = "False(0)";
    } else if (operation === 'and') {
        if (val1 === '0' && val2 === '0')
            result = "False(0)";
        else if (val1 === '0' && val2 === '1')
            result = "False(0)";
        else if (val1 === '1' && val2 === '1')
            result = "True(1)";
        else
            result = "False(0)";
    } else if (operation === 'or') {
        if (val1 === '0' && val2 === '0')
            result = "False(0)";
        else if (val1 === '0' && val2 === '1')
            result = "True(1)";
        else if (val1 === '1' && val2 === '1')
            result = "True(1)";
        else
            result = "True(1)";
    } else {
        if (val1 === '0' && val2 === '0')
            result = "False(0)";
        else if (val1 === '0' && val2 === '1')
            result = "True(1)";
        else if (val1 === '1' && val2 === '1')
            result = "False(0)";
        else
            result = "True(1)";
    }

    document.getElementById("result").innerHTML = result;
}
