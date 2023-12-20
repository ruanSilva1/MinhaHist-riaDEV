var hora = new Date()
var time = hora.getHours()
if(time < 12) {
    console.log('bom dia')
}else if(time <= 18) {
    console.log('boa tarde')
} else {
    console.log('boa noite')
}

switch (time) {
    case 0:
        console.log('dia 1')
        break
    case 1:
        console.log('dia 2')
        break
    case 2:
        console.log('dia 3')
        break
    default:
        console.log('error')
        break
}