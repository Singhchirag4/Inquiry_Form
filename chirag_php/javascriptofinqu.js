

const main=document.getElementById('main');
main.addEventListener('click', function(){
main.style.backgroundColor="yellow";
})
// time and date
setInterval(()=>{


let time=document.getElementById('time1');
let a= new Date();

let hours= a.getHours();
let minutes= a.getMinutes();
let seconds= a.getSeconds();


time.innerHTML=`${hours} : ${minutes} : ${seconds}`;
},1000);

