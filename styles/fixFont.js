elements = document.getElementsByClassName('nes-content')
for (let i = 0; i < elements.length; i++) {
    let element = elements[i];
    let paragraphs = element.querySelectorAll('p').length
    element.style.height = (element.offsetHeight*1.3 + 30*paragraphs) + "px"
}