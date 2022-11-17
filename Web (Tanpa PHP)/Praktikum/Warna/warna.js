const tUbahWarna = document.getElementById('tUbahWarna');
tUbahWarna.onclick = function(){
    //document.body.style.backgroundColor='lightblue';
    //document.body.setAttribute('class', 'biru-muda');
    document.body.classList.toggle('biru-muda');
}

const tAcakWarna = document.createElement('button');
const teksTombol = document.createTextNode('Acak warna');
tAcakWarna.appendChild(teksTombol);
tAcakWarna.setAttribute('type','button');
tUbahWarna.after(tAcakWarna);

tAcakWarna.addEventListener('click', function(){
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);

    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});

const sMerah = document.querySelector('input[name=sMerah]');
const sHijau = document.querySelector('input[name=sHijau]');
const sBiru = document.querySelector('input[name=sBiru]');


sMerah.addEventListener('change', function(){
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});

sHijau.addEventListener('change', function(){
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
    
});   

sBiru.addEventListener('change', function(){
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';

});  

document.body.addEventListener('mousemove', function(event){
    //posisi mouse
    // console.log(event.clientY);
    // ukuran broswer
    // console.log(window.innerWidth);
    const xPost = Math.round((event.clientX / window.innerWidth) * 255);
    const yPost = Math.round((event.clientY / window.innerWidth) * 255);

    document.body.style.backgroundColor = 'rgb('+ xPost +','+ yPost +',100)';


});