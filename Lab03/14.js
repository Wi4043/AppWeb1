let miNumero = '17';

let edad = Number(miNumero);
console.log('Edad');

if( isNaN(edad)){
    console.log('No es un numero');
}
else{
    if(edad >= 18){
        console.log('Puede votar');
    }
    else{
        console.log('Muy joven para votar');
    }
}

if(isNaN(edad)){
    console.log('No es un numero');
}
else{
    let resultado = (edad >=18)? 'Puede votar' : 'Muy joven para votar';
    console.log(resultado)  
}