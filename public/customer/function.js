function checkName() {
    var name = document.getElementById('txtName').value;
    if (name != '') {
        document.getElementById('errName').style.color = '';
        document.getElementById('txtName').style.borderColor = '';
        document.getElementById('txtName').style.backgroundColor = '';
        document.getElementById('errName').innerHTML = '';
        if (name.length < 5) {
            document.getElementById('errName').style.color = 'red';
            document.getElementById('txtName').style.borderColor = 'red';
            document.getElementById('txtName').style.backgroundColor = 'white';
            document.getElementById('errName').innerHTML = '(*) Vui lòng nhập đầy đủ họ và tên!';
        }
    } else {
        document.getElementById('errName').style.color = 'red';
        document.getElementById('txtName').style.borderColor = 'red';
        document.getElementById('txtName').style.backgroundColor = 'white';
        document.getElementById('errName').innerHTML = '(*) Vui lòng nhập họ tên!';
    }
}

function checkPhone() {
    var phone = document.getElementById('txtPhone').value;
    if (phone != '') {
        document.getElementById('errPhone').innerHTML = '';
        document.getElementById('errPhone').style.color = '';
        document.getElementById('txtPhone').style.borderColor = '';
        document.getElementById('txtPhone').style.backgroundColor = '';

        if (/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test(phone) == false) {
            document.getElementById('errPhone').style.color = 'red';
            document.getElementById('txtPhone').style.borderColor = 'red';
            document.getElementById('txtPhone').style.backgroundColor = 'white';
            document.getElementById('errPhone').innerHTML = '(*) Vui lòng nhập số điện thoại chính xác!';
        }
    } else {
        document.getElementById('errPhone').style.color = 'red';
        document.getElementById('txtPhone').style.borderColor = 'red';
        document.getElementById('txtPhone').style.backgroundColor = 'white';
        document.getElementById('errPhone').innerHTML = '(*) Vui lòng nhập số điện thoại!';
    }
}

function checkAdd() {
    var add = document.getElementById('txtAdd').value;
    if (add != '') {
        document.getElementById('errAdd').style.color = '';
        document.getElementById('txtAdd').style.borderColor = '';
        document.getElementById('txtAdd').style.backgroundColor = '';
        document.getElementById('errAdd').innerHTML = '';
        if (add.length < 10) {
            document.getElementById('errAdd').style.color = 'red';
            document.getElementById('txtAdd').style.borderColor = 'red';
            document.getElementById('txtAdd').style.backgroundColor = 'white';
            document.getElementById('errAdd').innerHTML = '(*) Vui lòng nhập địa chỉ lớn hơn 10 ký tự';
        }
    } else {
        document.getElementById('errAdd').style.color = 'red';
        document.getElementById('txtAdd').style.borderColor = 'red';
        document.getElementById('txtAdd').style.backgroundColor = 'white';
        document.getElementById('errAdd').innerHTML = '(*) Vui lòng nhập địa chỉ công trình!';
    }
}

function checkEmail() {
    var email = document.getElementById('txtEmail').value;
    if (email != '') {
        document.getElementById('errEmail').innerHTML = '';
        document.getElementById('errEmail').style.color = '';
        document.getElementById('txtEmail').style.borderColor = '';
        document.getElementById('txtEmail').style.backgroundColor = '';

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
            document.getElementById('errEmail').style.color = 'red';
            document.getElementById('txtEmail').style.borderColor = 'red';
            document.getElementById('txtEmail').style.backgroundColor = 'white';
            document.getElementById('errEmail').innerHTML = '(*) Vui lòng nhập đúng địa chỉ Gmail!';
        }
    } else {
        document.getElementById('errEmail').style.color = 'red';
        document.getElementById('txtEmail').style.borderColor = 'red';
        document.getElementById('txtEmail').style.backgroundColor = 'white';
        document.getElementById('errEmail').innerHTML = '(*) Vui lòng nhập địa chỉ Gmail!';
    }
}

function checkMessage() {
    var message = document.getElementById('txtMessage').value;
    if (message != '') {
        document.getElementById('errMessage').innerHTML = '';
        document.getElementById('errMessage').style.color = '';
        document.getElementById('txtMessage').style.borderColor = '';
        document.getElementById('txtMessage').style.backgroundColor = '';
    } else {
        document.getElementById('errMessage').style.color = 'red';
        document.getElementById('txtMessage').style.borderColor = 'red';
        document.getElementById('txtMessage').style.backgroundColor = 'white';
        document.getElementById('errMessage').innerHTML = '(*) Vui lòng nhập nội dung!';
    }
}

function checkinfo() {
    var name = document.getElementById('txtName').value;
    var phonenum = document.getElementById('txtPhone').value;
    var add = document.getElementById('txtAdd').value;
    var lenght = document.getElementById('txtlenght').value;
    var width = document.getElementById('txtwidth').value;
    if (name == "" && phonenum == "" && add == "") {
        window.alert("Vui lòng nhập đầy đủ thông tin để nhận báo giá chi tiết!");
        window.location = "../html/cart.html";
    } else {
        var result = lenght * width;
        document.getElementById("tongtien").innerHTML = result;

    }
}


function datatransfer() {
    var x = document.getElementById("form-1");
    var y = document.getElementById("form-2");
    x.style.display = "none";
    y.style.display = "block"
    var alu = document.getElementById('select-alu').value;
    document.getElementById('type').innerHTML = alu;
}