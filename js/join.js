const join = document.querySelector("#join");
const checkAll = document.querySelector("#checkAll");
const check = document.querySelectorAll(".check");

const userId = document.querySelector("#userId");
const userPass = document.querySelector("#userPass");
const userPassCheck = document.querySelector("#userPassCheck");
const userEmail = document.querySelector("#userEmail");
const userPhone = document.querySelector("#userPhone");
const userName = document.querySelector("#userName");
const userBirth = document.querySelector("#userBirth");

let totalValid = {
    mustvalid:false,
    idvalid:false,
    passvalid:false,
    passcheckvalid:false,
    emailvalid:false,
    emailvalid:false,
    phonevalid:false,
    namevalid:false,
    birthvalid:false
}

checkAll.addEventListener("click",function(){
    let checked = checkAll.checked;

    check.forEach(function(item,index){
        item.checked = checked;
    });

    if(checked == true){
        totalValid.mustvalid = true;
    }
    else{
        totalValid.mustvalid = false;
    }
});

check.forEach(function(item,index){
    item.addEventListener("click",function(){
        let count = document.querySelectorAll(".check:checked").length;

        if(count == check.length){
            checkAll.checked = true;
            totalValid.mustvalid = true;
        }
        else{
            checkAll.checked = false;
            totalValid.mustvalid = false;
        }
    });
});

join.addEventListener("submit",function(e){

    const IdValue = userId.value; //아이디 입력값
    const passValue = userPass.value; //비밀번호 입력값
    const passCheckValue = userPassCheck.value; //비밀번호확인 입력값
    const emailValue = userEmail.value; //이메일 입력값
    const phoneValue = userPhone.value; //연락처 입력값
    const nameValue = userName.value; //이름 입력값
    const birthValue = userBirth.value; //생년월일 입력값

    //정규표현식 세팅
    const idCheck = /^\w{5,12}$/;
    const passCheck = /^[\w\.!@?$%]{10,14}$/;
    const emailCheck = /^[\w]+\@[a-z]+\.[a-z\.]{2,5}$/;
    const phoneCheck = /^(010)\-\d{4}\-\d{4}$/;
    const nameCheck = /^[ㄱ-힣]{2,4}$/;
    const birthCheck = /^(19[0-9][0-9]|20\d{2})\-(0[1-9]|1[0-2])\-(0[1-9]|[1-2][0-9]|3[0-1])$/;

    //아이디 체크
    if(valueCheck(idCheck,IdValue)){
        successInput(userId);
        totalValid.idvalid = true;
    }
    else{
        errorInput(userId,"5~12자리의 영문,숫자,_만 입력가능합니다.");
        totalValid.idvalid = false;
    }

    //비밀번호 체크
    if(valueCheck(passCheck,passValue)){
        successInput(userPass);
        totalValid.passvalid = true;
    }
    else{
        errorInput(userPass,"10~14자리의 영문, 숫자, 특수문자만 입력가능합니다.");
        totalValid.passvalid = false;
    }

    //비밀번호 확인 체크
    if(valueCheck(passCheck,passCheckValue) && passValue == passCheckValue){
        successInput(userPassCheck);
        totalValid.passcheckvalid = true;
    }
    else{
        errorInput(userPassCheck,"비밀번호가 일치하지 않습니다.");
        totalValid.passcheckvalid = false;
    }

    //이메일 체크
    if(valueCheck(emailCheck,emailValue)){
        successInput(userEmail);
        totalValid.emailvalid = true;
    }
    else{
        errorInput(userEmail,"이메일 형식에 맞지 않습니다.");
        totalValid.emailvalid = false;
    }

    //연락처 체크
    if(valueCheck(phoneCheck,phoneValue)){
        successInput(userPhone);
        totalValid.phonevalid = true;
    }
    else{
        errorInput(userPhone,"연락처 형식에 맞지 않습니다.");
        totalValid.phonevalid = false;
    }

    //이름 체크
    if(valueCheck(nameCheck,nameValue)){
        successInput(userName);
        totalValid.namevalid = true;
    }
    else{
        errorInput(userName,"2~4자리의 한글만 입력가능합니다.");
        totalValid.namevalid = false;
    }

    //생년월일 체크
    if(valueCheck(birthCheck,birthValue)){
        successInput(userBirth);
        totalValid.birthvalid = true;
    }
    else{
        errorInput(userBirth,"올바른 생년월일이 아닙니다.");
        totalValid.birthvalid = false;
    }

    //전부 제대로 입력 = true / 하나라도 입력x = false
    if(lastCheck()){
        join.submit();
    }
    else if(totalValid.mustvalid == false){
        e.preventDefault();
        alert("이용약관에 모두 동의하셔아 합니다.");
    }
    else{
        e.preventDefault();
        alert("모든 입력칸에 전부 입력하셔야 합니다.");
    }
});

//정규표현식 설정 결과가 true이면 실행할 함수
function successInput(correct){
    correct.parentElement.className = "form_action success";
}

//정규표현식 설정 결과가 false이면 실행할 함수
function errorInput(correct,message){
    correct.parentElement.className = "form_action error";
    correct.parentElement.querySelector(".error_msg").innerHTML = message;
}

//정규표현식으로 입력한 value값 체크
function valueCheck(vCheck,inputValue){
    let checkResult = vCheck.test(inputValue);
    return checkResult;
}

//totalvalid 갯수만큼 반복문 수행 -> 전부 true or false 확인 함수
function lastCheck(){

    let totalCheck = true;

    for(let item in totalValid){
        if(totalValid[item] == false){
            totalCheck = false;
        }
    }
    return totalCheck;
}